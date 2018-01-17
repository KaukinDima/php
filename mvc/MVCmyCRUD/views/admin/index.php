<?php

  $res = "";
  foreach (explode( "-", "add-page") as $key => $value) {
    $res = $res . ucfirst($value);
  }
  echo "$res";
?>

<ul>
  <li>
    <a href="<?php echo $_SERVER['REQUEST_URI']; ?>/AddPage">Добавить страницу</a>
  </li>
  <li>
    <a href="<?php echo $_SERVER['REQUEST_URI']; ?>ShowPage">Показать страницу</a>
  </li>
</ul>
