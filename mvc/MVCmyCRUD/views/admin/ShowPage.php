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
<?php if( isset($_POST['page']) ) { ?>



<?php
}else { ?>


  <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">


  <select name="id">
    <?php foreach ($viewmodel as $k => $v) { ?>
    <option value="<?php echo $v['section_id'] ?>"><?php echo $v['section_name'] ?></option>
    <option value="<?php echo $v['section_id'] ?>"><?php echo $v['section_name'] ?></option>
    <option value="<?php echo $v['section_id'] ?>"><?php echo $v['section_name'] ?></option>
    <?php } ?>
  </select>


    <input type="submit" name="section" value="">
  </form>

<?php } ?>

</body>
</html>
