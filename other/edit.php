<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"
        defer></script>
    <link rel="stylesheet" href="edit.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700;900&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Edit data mahasiswa -->
    <?php
  include('connection.php');
  $name = $_GET['name'];
  $show = mysqli_query($connection, "SELECT * FROM footie WHERE name = '$name'");
  if (mysqli_num_rows($show) == 0) {
    echo '<script>window.history.back()</script>';
  } else {
    $d = mysqli_fetch_assoc($show);
  }
  ?>
    <nav class="navbar" style="padding: 1.5em 3em; position:fixed; top:0; left:0; right:0">
        <img src="../img/logo.png" alt="">
        <div class="right">
            <a href="main.php">Back</a>
        </div>
    </nav>

    <div class="row row-cols-4">
      <div class="col">
        <div class="card">
          <div class="header">
            <img src="../img/<?=$d['image']?>"; alt="">
          </div>
          <div class="card-body">
            <div class="type">
              <p><?php echo $d['type']; ?></p>
            </div>
            <div class="desc">
              <p><?php echo $d['name']; ?></p>
              <p><?php echo $d['price']; ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
      <form action="edit_process.php" method="post">
        <h2>Edit Shoes</h2>
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <table>
            <tr>
                <td>type</td>
                <td> : </td>
                <td>
                    <input type="text" name="type" size="50" value="<?php echo $d['type']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>price</td>
                <td> : </td>
                <td>
                    <input type="text" name="price" size="50" value="<?php echo $d['price']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>image</td>
                <td> : </td>
                <td>
                    <input type="file" name="image" size="50" value="<?php echo $d['image']; ?>" required>
                </td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td>
                    <input type="submit" name="edit" value="edit">
                </td>
            </tr>
        </table>
    </form>
      </div>
    </div>

    
</body>

</html>