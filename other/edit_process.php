<?php

if(isset($_POST['edit']))
{
    include('connection.php');
    $name        = $_POST['name'];
    $price       = $_POST['price'];
    $type     = $_POST['type'];
    $image     = $_POST['image'];
    $update     = mysqli_query($connection,"update footie set
    
    type        ='$type',
    price      ='$price',
    image      ='$image'
    
    where name   = '$name' ")

    or die(mysqli_error($connection));

    if($update)
    {
        header("Location: main.php");
        exit();
    }

    else
    {
        echo "<h2>Gagal menyimpan data</h2>";
        echo "<a href ='edit.php ?nim= ".$name."'>kembali</a>";
    }
}

else
{
    echo "<script>window.history.back()</script>";
}

?>