<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c6666c8b9a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</head>
<body>

    <?php
    
        require('db.php');
        session_start();

        if(isset($_POST['username'])) {
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $username);
            $query = "SELECT * FROM users WHERE username='$username' AND password='".md5($password)."'";

            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);

            if($rows == 1){
                $_SESSION['username'] = $username;
                header("Location: index.php");
            }else {
                echo "
                    <div class='form'>
                        <h3> Username or Password is invalid.</h3>
                        <br>Click here to <a href='login.php'>Login</a>
                    </div>";
                }
            } else {
    ?>
    <section class="sec-php1">
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="#">ICEACE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-angle-down"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#" onclick="myalert()"><i class="fas fa-home"></i> HOME<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="myalert()"><i class="far fa-address-card"></i> ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="myalert()"><i class="fas fa-code"></i> SKILL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="myalert()"><i class="fas fa-project-diagram"></i> MY PROJECT</a>
                </li>    
        </section>
            <div class="form">
                  <h1>Log in</h1>
                    <form action="" method="post" name="Login">
                    <input type="text" name="username" placeholder="Username" require>
                    <input type="password" name="password" placeholder="Password" require>
                    <input type="submit" name="submit" value="Login">
                    </form>
                    <p>Not register?<a href="register.php"> Register here</a></p>
            </div>
            <?php } ?>

                <script>
                        function myalert() {
                            alert("You must Login to see my Portfolio");
                        }
                </script>
</body>
</html>