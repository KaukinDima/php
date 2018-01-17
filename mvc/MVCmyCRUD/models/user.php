<?php
class UserModel extends Model {
  public function register() {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    print_r($post);
		$password = md5( $post["password"] );

		if($post['register']){

			$this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->execute();

			if($this->lastInsertId()){
				header('Location: '.ROOT_URL.'users/login');
			}
		}
    return;
  }

  public function login(){
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $password = md5($post['password']);

    if($post['login']){

      $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
      $this->bind(':email', $post['email']);
      $this->bind(':password', $password);

      $row = $this->single();

      if($row){
        echo 'correct Login';
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_data'] = array(
          "id"	=> $row['id'],
          "name"	=> $row['name'],
          "email"	=> $row['email']
        );
        header('Location: '.ROOT_URL.'shares');
      } else {
        Messages::setMsg('Incorrect login', 'error');
      }
    }
    return;
  }


}