<?php

include 'includes/config.php';
if(!$_SESSION['loggedIn']){
    redirect("login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="style" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/bgAudio.js"></script>

    <title>QUEEZY BUNCH</title>
</head>

<body>
    <div class="image-container">
        <nav class="navbar">
            <h1 class="logo">QUEZZY BUNCH</h1>
            <div class="links">
            <a href="howtoplay.php">HOW TO PLAY</a>
            <?php if($_SESSION['loggedIn']){ ?>
                  <a href="profile.php">Hi, <?=$_SESSION['user_name'];?></a>
                <?php } ?>
                <a href="profile.php"><i class="bi bi-power custom-icon"></i></a>
                <button class="" id="mutebtn"><i class="bi bi-volume-up-fill"></i></button>
            </div>
        </nav>
        <div class="container">
            <div class="content">
                <img id="quiz-image" src="./assets/images/icon quiz.png" alt="">
                <h1 class="indexTitle">Let’s Play And Win!</h1>
                <?php if($_SESSION['loggedIn']){ ?>
                  <a href="howtoplay.php"><button class="startBtn" id="startbtn">Start Playing</button></a>
                <?php } ?>
            </div>
        </div>
    </div>

    <audio id="music">
        <source type="audio/mp3" src="assets/audio/bg_music.mp3">
    </audio>
</body>
</html>