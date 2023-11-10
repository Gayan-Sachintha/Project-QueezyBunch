<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/player.css" type="text/css">
    <script src="js/audio.js"></script>
  
    <title>QUEEZY BUNCH</title>
</head>

<body>
    <div class="image-container">
        <nav class="navbar">
            <h1 class="logo">QUEZZY BUNCH</h1>
            <div class="links">
                <a href="index.php"><i class="bi bi-x-lg custom-icon"></i></i></a>
                <a href="profile.php"><i class="bi bi-person-vcard-fill custom-icon"></i></i></a>
                <a href="logout.php">Logout</a>
                <button class="" id="mutebtn"><i class="bi bi-volume-up-fill"></i></button>
            </div>
        </nav>

        <div class="container">
            <div class="sTitle">Single Player</div>

            <div class="single-Data">
                <span>Question : 01</span>
                <span>Score : 234</span>
                <span>Time Left : 01:23</span>
            </div>
                 <img src="assets/images/sixeqgame_0.png" class="imgApi" id="imgApi" alt="imgApi"> 
                 
                    <div class="ans-align">
                        <p class="txtAns">Enter The Answer : </p>
                        <input type="number" class="input-field" id="age" placeholder="Enter Answer" min="0">
                        <button type="submit" class="btnGo">Go!</button>
                    </div>

                </div>

    </div>
    
</body>

</html>