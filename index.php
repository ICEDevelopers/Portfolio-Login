<?php

include('auth.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PORTFOLIO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="portfolio css/style.css" rel="stylesheet">
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
<!--//Menu-bar//-->
<section class="sec-1">

    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="#">ICEACE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-angle-down"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#Home"><i class="fas fa-home"></i> HOME<span
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
                    <a class="nav-link" href="#" placeholder="You name"><i class="fas fa-user"></i> <?php echo $_SESSION['username'];?></i></a>
                </li>
                <li class="nav-out">
                    <a class="nav-link" href="login.php" placeholder="Logout"><i class="fas fa-sign-out-alt"></i> Logout</i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!--//End menu-bar//-->
    <!--//Start Home//-->

    <div class="start">
        <h1>This is my Portfolio Website</h1>
        <p>Hi, This is my first Portfolio website i made it by HTML and CSS only Becuase i can't use JavaScript</p>
        <div class="start-icon">
            <h1 class="Contact">CONTACT</h1>
            <div>
                <i class="fab fa-facebook-square"><a href=""> : SONGWUT MALISRI</a></i><br>
                <i class="fab fa-line"><a href=""> ID: ICE1230</a></i><br>
                <i class="fas fa-phone-alt"><a href=""> : 063-501-5309</a></i><br>
                <i class="fas fa-envelope"><a href=""> Gmail: icycaster41@gmail.com</a></i>
            </div>
        </div>

    </div>
    <footer>
        <div class="foot">
            <p class="pfooter"><i class="far fa-copyright"></i>This Portfolio made by Songwut Malisri | Code and Template by Songwut Malisri | 2020</p>
        </div>
    </footer>

</section>

<!--//End Home//-->



<body>

</body>

</html>