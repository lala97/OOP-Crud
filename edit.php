<?php
if (isset($_POST['gonder'])) {

  include 'index.php';
  $id=$_POST['id'];
  $title=$_POST['title'];
  $text=$_POST['text'];


  $a=new Database("localhost","root","","xeber");
  $edit=$a->update("xeber",$title,$text,$id);
var_dump($edit);
  if ($edit) {
    header('Location:show.php');
  }
  // else {
  //   echo "error";
  // }

}
 ?>
