<?php
$id=$_GET['id'];
include 'index.php';
$a=new Database("localhost","root","","xeber");
$delete=$a->delete('xeber',$id);
if ($delete) {
header('Location:show.php');
}
else {
  echo "error";
}
?>
