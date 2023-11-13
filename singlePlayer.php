<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/player.css" type="text/css">
    <script src="js/bgAudio.js"></script>

    <title>QUEEZY BUNCH</title>
     <script>
        var imgApi = "";
        var solution = -1;

        let newgame = function() {
            fetchImage();
            document.getElementById("input").value = "";
        }

        let handleInput = function() {
            let inp = document.getElementById("input");
            var note = document.getElementById("note");
            if (inp.value === solution.toString()) {
                note.innerHTML = 'Correct!';
            } else {
                note.innerHTML = 'Not Correct!';
            }
        }

        let startQuest = function(data) {
            try {
                var parsed = JSON.parse(data);
                imgApi = parsed.question;
                solution = parsed.solution;

                if (imgApi) {
                    let img = document.getElementById("imgApi");
                    img.src = imgApi;
                    let note = document.getElementById("note");
                    note.innerHTML = 'Ready?';
                } else {
                    console.log('Image URL not found in the API response.');
                }
            } catch (error) {
                console.error('Error parsing JSON response:', error);
            }
        }

        let fetchImage = async function() {
            try {
                let response = await fetch('https://marcconrad.com/uob/tomato/api.php');
                if (response.ok) {
                    let data = await response.text();
                    startQuest(data);
                } else {
                    console.error('Failed to fetch image from the API.');
                }
            } catch (error) {
                console.error('An error occurred:', error);
            }
        }
        fetchImage();
    </script>
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
            <div class="imgApi">
                <img src="" alt="Question Image" id="imgApi" class="color-image">
            </div>

            <div class="ans-align">
                <p class="txtAns">Enter The Answer : </p>
                <input type="number" class="input-field" id="input" name="input" placeholder="Enter Answer" min="0">
                <button type="submit" class="btnGo" onclick="handleInput()">Go!</button>
            </div>
        </div>
    </div>
    <audio id="music">
        <source type="audio/mp3" src="assets/audio/bg_music.mp3">
    </audio>

</body>

</html>