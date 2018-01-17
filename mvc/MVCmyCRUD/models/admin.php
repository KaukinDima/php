<?php
class AdminModel extends Model {
  public function Index() {
    return;
  }

  public function asd() {
    echo "<br /> первый хуй <br /> ";
  }

  public function ShowPage() {

    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if(isset($post['section'])){
      $id = $post['id'];
      $query = array(
        'name' => 'SELECT * FROM `name_sections` WHERE `section_id` = ' . $id .';',
        'body' => 'SELECT * FROM `section_body` WHERE `section_id` = '. $id . ';',
        'header' =>  'SELECT * FROM `section_header` WHERE `section_id` = ' . $id . ';',
        'footer' =>  'SELECT * FROM `section_footer` WHERE `section_id` = ' . $id . ';'
      );

      $arr = [];

      foreach ($query as $k =>$v) {
        $this->query($v);
        $rows = $this->resultSet();
        $arr[$k] = $rows;
      }

      return $arr;
      return "хуй";
    }

    $this->query('SELECT * FROM `name_sections`;');
    $rows = $this->resultSet();

    return $rows;

  }

}
