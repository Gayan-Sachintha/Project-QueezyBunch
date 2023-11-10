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
                <a href="howtoplay.php">HOW TO PLAY</a>
                <a href="logout.php">Logout</a>
                <button class="" id="mutebtn"><i class="bi bi-volume-up-fill"></i></button>
            </div>
        </nav>
        <div class="container">
            <div class="content">
                <div class="profileform-wrapper">
                    <h1 class="text-center">My Profile</h1>
                    <form class="profileform-align">
                        <div class="profileform-group">
                            <label for="fullName">Full Name :</i></label>
                            <input type="text" class="input-field" id="fullName" required>
                        </div>
                        <div class="profileform-group">
                            <label for="email">Email Address :</i></label>
                            <input type="email" class="input-field" id="email"required>
                        </div>
                        <div class="profileform-group">
                            <label for="age">Age :</i></label>
                            <input type="number" class="input-field" id="age" min="0" required>
                        </div>
                        <div class="profileform-group">
                            <label for="password">Password :</i></label>
                            <input type="password" class="input-field" id="password" required>
                        </div>
                        <div class="text-center">
                            <button class="updateformbtn" type="submit" id="updateformbtn" name="register" >Update</button> <br><br>                            
                        </div>   
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>