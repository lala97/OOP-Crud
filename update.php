<?php
include 'index.php';
$id=$_GET['id'];
  $a=new Database("localhost","root","","xeber");
   $lala=$a->select("xeber","id=$id");
$row=mysqli_fetch_assoc($lala);


//    $tt = $_GET['id'];
// $newquery = $connect -> select("crudoop", "id = $tt");
// var_dump($newquery);
// $row = mysqli_fetch_assoc($newquery);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        input{
          display: block;
          padding: 10px 15px;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Update a Customer</h1>
      <div class="col-md-4 col-md-offset-3">
        <form action="edit.php" method="post">
          <input class="form-control"  type="text" name="id" value="<?php echo $row['id']?>" >
          <label class="form-control-label">Title</label>
          <input class="form-control"  type="text" name="title" placeholder="Ad" value="<?php echo $row['title'] ?>">
            <label class="form-control-label">Text</label>
          <input class="form-control"  type="text" name="text" placeholder="Soyad" value="<?php echo $row['text'] ?>">

          <!-- <label class="form-control-label">Yas</label>
          <input class="form-control"  type="number" name="age" placeholder="Yas" value="<?php
          // echo $row['age']
           ?>"> -->
          <input type="submit" name="gonder" value="Update"  class="btn btn-success">
            <input type="submit" name="back" value="Back"  class="btn btn-default">
        </form>
      </div>
  </div>
  </body>
</html>
