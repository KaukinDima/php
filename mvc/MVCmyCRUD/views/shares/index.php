<div class="">
  <?php if(isset($_SESSION['is_logged_in'])) {
  ?>
  <a href="<?php echo ROOT_PATH . "shares/add"?>" class="btn btn-success btn-share">Share</a>
  <?php } ?>
  <?php foreach ($viewmodel as $k => $v) { ?>
  <div class="well">
    <h3> <?php echo $v["title"]; ?> </h3>
    <small><?php echo $v["create_date"]; ?></small>
    <hr>
    <p><?php echo $v["body"]; ?></p>
    <br>
    <a href="<?php echo $v["link"]; ?>"> <?php echo $v["title"]; ?> </a>
  </div>
  <?php } ?>
</div>
