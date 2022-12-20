<?php 
  
  if(isset($_POST['add'])) {
    include_once 'connection.php';
    $type = $_POST['type'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $input = mysqli_query($connection, "INSERT INTO footie VALUES
    ('$type', '$name', '$price', '$image')");

    if ($input) {
      header("Location: main.php");
      exit();
    }
    else  {
      echo "Gagal menambahkan data";
      echo "<a href='add.php'>Kembali</a>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }