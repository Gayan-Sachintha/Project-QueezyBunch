<?php
include 'includes/config.php';
if (!$_SESSION['loggedIn']) {
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
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/bgAudio.js"></script>

    <title>QUEEZY BUNCH</title>
</head>

<body>
    <div class="image-container">
        <nav class="navbar">
            <h1 class="logo">QUEZZY BUNCH</h1>
            <div class="links">
                <?php if ($_SESSION['loggedIn']) { ?>
                    <a href="profile.php">Hi, <?= $_SESSION['user_name']; ?></a>
                <?php } ?>
                <a href="scores.php"><i class="bi bi-123 custom-icon"></i></a>
                <a href="index.php"><i class="bi bi-house custom-icon"></i></a>
                <a href="logout.php"><i class="bi bi-power custom-icon"></i></a>
                <button class="" id="mutebtn"><i class="bi bi-volume-up-fill"></i></button>
            </div>
        </nav>

        <div class="container">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../QueezyBunch/assets/images/instructions/step1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../QueezyBunch/assets/images/instructions/step2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../QueezyBunch/assets/images/instructions/step3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../QueezyBunch/assets/images/instructions/step4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../QueezyBunch/assets/images/instructions/step5.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a href="singlePlayer.php?new=true"><button class="startBtn" id="startbtn">Start Playing</button></a>
        </div>
    </div>
    <audio id="music">
        <source type="audio/mp3" src="assets/audio/bg_music.mp3">
    </audio>
</body>

</html>