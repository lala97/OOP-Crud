<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="" method="post">
      <input type="text" name="title" value="">
      <input type="text" name="text" value="">
      <input type="submit" name="name" value="submit">
    </form>
  </body>
</html>
<?php
include 'index.php';
$a=new Database("localhost","root","","xeber");
if (isset($_POST['name'])) {
if (  $a->insert('xeber',$_POST['title'],$_POST['text'])) {
    header('Location:show.php');
}
else {
  echo "error";
}
}
 ?>
