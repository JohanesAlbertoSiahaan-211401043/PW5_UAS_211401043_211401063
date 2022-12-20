<?php
    if (isset($_POST['login'])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == 'admin' and $password == 'admin123'){
            header("Location: other/main.php ");
            exit;
        } else {
            echo "<script>alert('Username or password is wrong');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700;900&display=swap" rel="stylesheet">

    <!-- own css -->
    <link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">
</head>
<body>
    <nav class="navbar navbar-light bg-light" style="padding: .5em 3em; position:fixed; top:0; left:0; right:0">
        <span class="navbar-brand mb-0 h1">
            <img src="img/logo.png" alt="">
        </span>
    </nav>
    <div class="container">
        <div class="main">
            <img src="img/nike-brown.png" alt="">
        </div>
        <div class="login">
            <form action="" method="post">
                <div class="header">
                    <h1>Login</h1>
                </div>
                <div class="fill">
                    <input type="text" id="username" name="username" placeholder="Username"><br>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <div class="bottom">
                    <button type="submit" name="login">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>