<?php

include('auth.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Me</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <link rel="stylesheet" href="portfolio css/style.css">
</head>
</head>

<body>
    <section class="sec-2" id="About">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#">ICEACE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-angle-down"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> HOME<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="far fa-address-card"></i> ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skill.php"><i class="fas fa-code"></i> SKILL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="project.php"><i class="fas fa-project-diagram"></i> MY PROJECT</a>
                    </li>
                    <li class="nav-user">
                    <a class="nav-link" href="#"><i class="fas fa-user"></i> <?php echo $_SESSION['username'];?></i></a>
                </li>
                <li class="nav-out">
                    <a class="nav-link" href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</i></a>
                </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="title">
                <h1><i class="far fa-address-card"></i> ABOUT</h1>
                <div class="about-me">
                    <p>My name is Songwut Malisri <br> I'm an Web Designer and Web Developer <br>
                        I'm studing at Ubon Technical College <br>I'm from Thailand <br>Im 16 years old
                        <br>My favorite C Language is HTML, CSS, JS <br>
                        This is my first Portfolio Website </p>
                </div>
            </div>
            <div class="profile">
                <img src="img/profile.jpg" alt="">

            </div>

            <div class="read">
                <button type="button" class="btn btn-outline-secondary" onclick="">Read about me</button>
            </div>
        </div>
        <footer class="foot2">
            <div class="foot1">
                <p class="pfoot"><i class="far fa-copyright"></i>This Portfolio made by Songwut Malisri | Code and Template by Songwut Malisri | 2020</p>
            </div>
        </footer>
    </section>
</body>

</html>