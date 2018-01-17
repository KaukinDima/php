<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>


<?php
echo "<pre>";
print_r($viewmodel);
echo "</pre>";

?>

  <h2>Добавить страницу</h2>
  <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name" value="Имя страницы">
    <input type="submit" name="addpage" value="Add">
  </form>

  <h2>Удалить страницу</h2>

  <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="submit" name="removepage" value="Add">
  </form>

</body>
</html>
