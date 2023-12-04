<?php

include 'includes/config.php';
if(!$_SESSION['loggedIn']){
    redirect("login.php");
}

$sql = mysqli_query($conn, "SELECT * FROM scores ORDER BY score DESC, id DESC LIMIT 1");
$result = mysqli_fetch_array($sql);
$playerID = $result["playerID"];
$score = $result["score"];
$datentime = $result["datentime"];
$gameID = $result["id"];
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
                <a href="index.php"><i class="bi bi-house custom-icon"></i></i></a>
                <a href="logout.php"><i class="bi bi-power custom-icon"></i></a>
                <button class="" id="mutebtn"><i class="bi bi-volume-up-fill"></i></button>
            </div>
        </nav>
        <div class="container">
            <div class="content">
                <div class="profileform-wrapper">
                    <h1 class="text-center">BEST SCORED !</h1>
                    <hr>
                    <h4>Player : <?=$playerID;?></h4>
                    <h4>Game ID : <?=$gameID;?></h4>
                    <h4>Score : <?=$score;?></h4>
                    <h4>Date : <?=$datentime;?></h4>
                </div>
            </div>
        </div>
    </div>
    
    <audio id="music">
        <source type="audio/mp3" src="assets/audio/bg_music.mp3">
    </audio>
</body>
</html>