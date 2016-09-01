<?php
// include 'search.php';
// if ($lala) {
//   while ($row=mysqli_fetch_assoc($lala)) {
//     // print("<pre>");
//     // print( $row['title']);
//     // print("</pre>");
//     if ($row['title']==$name) {
//       $_SESSION['title']="djkcabhfcbhc";
//
//     header('Location:show.php');
//     }
//   }
// }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .create{
      background: green;
      border-radius:5px;
      color:white;
      padding: 10px 15px;
    }
    .update{
      background: green;
    color: white;
    background: green;
      color: white;
      padding: 5px 10px;
      border-radius: 5px;

    }
    table{
      margin-top:20px;
    }

    td{
      height: 40px;
      width: 150px;
    }
    tr td:first-child{
      display: none;
    }
    </style>
  </head>
  <body>
    <div class="container">
        <h1>PHP CRUD Grid</h1>

        <div class="row">
    <table  class="table table-bordered">
      <thead>
      <tr>
        <td><b>id<b></td>
          <td><b>TITLE</b></td>
           <td><b>TEXT</b></td>
             <td><b>CREATE_DATE</b></td>
              <td><b>Action</b></td>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'index.php';
      $a=new Database("localhost","root","","xeber");
       $lala=$a->select('xeber');
      if ($lala) {
         while($row=mysqli_fetch_assoc($lala)){  ?>
           <tr>
          <?php foreach ($row as $key => $value) {
            echo "<td>$value</td>";
         } ?>
        <td>
          <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-success">Update</a>
           <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">DELETE</a>
        </td>
         </tr>
      <?php  }
      }
    ?>
    <a href="insert.php?id=<?php echo $row['id']?>" class="btn btn-success">Create</a>
    <a href="read.php" class="btn btn-default">Read</a>

    </tbody>
    </table>
  </div>
</div>
  </body>
</html>
