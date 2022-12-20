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
    <link rel="stylesheet" href="add.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700;900&display=swap" rel="stylesheet">
</head>

<body>

<nav class="navbar" style="padding: 1.5em 3em; position:fixed; top:0; left:0; right:0">
        <img src="../img/logo.png" alt="">
        <div class="right">
            <a href="main.php">Back</a>
        </div>
    </nav>

    <h1>Add Shoes</h1>
    
    <form action="add_process.php" method="post">
        <table>
            <tr>
                <td>type</td>
                <td> : </td>
                <td><input type="text" name="type" required></td>
            </tr>
            <tr>
                <td>Name</td>
                <td> : </td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Price</td>
                <td> : </td>
                <td><input type="text" name="price" required></td>
            </tr>
            <tr>
                <td>Image</td>
                <td> : </td>
                <td><input type="file" name="image" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="add" value="add"></td>
            </tr>
        </table>
    </form>
</body>

</html>