<?php

include('auth.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Skill</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
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
    <link href="portfolio css/style.css" rel="stylesheet">
</head>

<body>
    <section class="sec-3">
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
        <div class="myskill">
            <h1 class="tskill"><i class="fas fa-code"></i> My Skills</h1>
        </div>
        <div class="skills">
            <li>
                <h3><i class="fab fa-html5"></i> HTML</h3>
                <p>60%</p><span class="bar"><span class="html"></span></span>
            </li>
            <li>
                <h3><i class="fab fa-css3-alt"></i> CSS</h3>
                <p>50%</p><span class="bar"><span class="css"></span></span>
            </li>
            <li>
                <h3><i class="fab fa-js-square"></i> JavaScript</h3>
                <p>30%</p><span class="bar"><span class="js"></span></span>
            </li>
            <li>
                <h3><i class="fab fa-php"></i> PHP</h3>
                <p>10%</p><span class="bar"><span class="php"></span></span>
            </li>
            <li>
                <h3><i class="fab fa-react"></i> React</h3>
                <p>5%</p><span class="bar"><span class="react"></span></span>
            </li>
        </div>
        <footer class="foot3">
            <div class="footer3">
                <p class="pfot"><i class="far fa-copyright"></i>This Portfolio made by Songwut Malisri | Code and Template by Songwut Malisri | 2020</p>
            </div>
        </footer>
    </section>
</body>

</html>