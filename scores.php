<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/audio.js"></script>

    <title>QUEEZY BUNCH</title>
</head>

<body>
    <div class="image-container">
        <nav class="navbar">
            <h1 class="logo">QUEZZY BUNCH</h1>
            <div class="links">
                <a href="login.php">LOGIN</a>
                <a href="register.php">SIGN-UP</a>
                <a href="howtoplay.php">HOW TO PLAY</a>
                <a href="logout.php">Logout</a>
                <button class="" id="mutebtn"><i class="bi bi-volume-up-fill"></i></button>
            </div>
        </nav>
        <div class="container">
            <div class="content">
                <div class="profileform-wrapper">
                    <h1 class="text-center">MY SCORES</h1>
                    <form class="profileform-align">
                    <table class="table">
            <thead>
                <tr>
                    <th>Game ID</th>
                    <th>Played Time</th>
                    <th>Total Score</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $scores = fetchmyScores();

                foreach($scores as $game){ ?>
                <tr>
                    <td><?=$game['gameIdentity'];?></td>
                    <td><?=$game['gamePlayed_On'];?></td>
                    <td><?=$game['scores'];?></td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>