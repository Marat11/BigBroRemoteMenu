<?php
  require_once('classes/LikeBroAPIRequest.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <form method="post">
    <input type="text" name="user_name"/>
    <input type="submit" value="Получить данные"/>
  </form>
  <?php
  if (isset($_POST['user_name'])) {
    LikeBroAPIRequest::getBar($_POST['user_name']);
  }
  ?>
</body>
</html>