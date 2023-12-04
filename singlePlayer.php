<?php
include 'includes/config.php';
if (!$_SESSION['loggedIn']) {
    redirect("login.php");
}

if(isset($_GET['new'])){
    echo '<script>localStorage.removeItem("timeLeft");</script>';
    echo '<script>localStorage.removeItem("score");</script>';
    echo '<script>localStorage.removeItem("numQuestions");</script>';
    echo '<script>localStorage.removeItem("currentLevel");</script>';

    echo '<script>const currentURL = new URL(window.location.href);</script>';
    echo '<script>const searchParams = new URLSearchParams(currentURL.search);</script>';
    echo '<script>searchParams.delete("new");</script>';
    echo '<script>history.replaceState({}, "", `${currentURL.pathname}?${searchParams.toString()}`);</script>';
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
    <link rel="stylesheet" href="css/player.css" type="text/css">
    <script src="js/bgAudio.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>QUEEZY BUNCH</title>
    <script>
        let timeLeft = localStorage.getItem('timeLeft') || 30;
        let score = localStorage.getItem('score') || 0;
        let numQuestions = localStorage.getItem('numQuestions') || 1;
        let currentLevel = localStorage.getItem('currentLevel') || 1;
        let timer;
        let imgApi;
        let solution;

        function updateUI() {
            document.getElementById("question-number").textContent = numQuestions;
            document.getElementById("score").textContent = score;
            document.getElementById("timer").textContent = timeLeft;
            document.getElementById("level-no").textContent = currentLevel;
        }

        function handleTimeOut() {
            clearInterval(timer);
            Swal.fire({
                title: "Time's UP !",
                text: "Time's up! Game Over.",
                icon: "error"
            });

            if (currentLevel > 1) {
                Swal.fire({
                    title: "Level Passed",
                    text: "Congratulations! You have completed Level " + (currentLevel - 1) + ".",
                    icon: "success"
                });
            }

            resetGame();
        }

        function handleInput() {
            if (timeLeft > 0) {
                let answer = document.getElementById("answer").value;
                if (answer !== "") {
                    if (answer == solution) {
                        score++;
                        numQuestions++;
                        updateUI();

                        if (numQuestions > 5) {
                            handleCorrectAnswer();
                        } else {
                            fetchImage();
                        }

                        Swal.fire({
                            title: "Answered !",
                            icon: "success"
                        });
                    } else {
                        Swal.fire({
                            title: "Wrong Answer",
                            text: "That answer is wrong",
                            icon: "error"
                        });
                    }
                } else {
                    Swal.fire({
                        title: "Empty Answer",
                        text: "Please enter an answer",
                        icon: "error"
                    });
                }
            } else {
                Swal.fire({
                    title: "Time's UP !",
                    text: "Time's up! Game Over.",
                    icon: "error"
                });
                resetGame();
            }
        }

        function handleCorrectAnswer() {
            Swal.fire({
                title: "Level Passed",
                text: "Congratulations! You have completed Level " + (currentLevel - 1) + ".",
                icon: "success"
            });
            currentLevel++;
            numQuestions = 1;
            fetchImage();
        }

        function fetchImage() {
            fetch('https://marcconrad.com/uob/tomato/api.php')
                .then(response => response.json())
                .then(data => {
                    imgApi = data.question;
                    solution = data.solution;
                    document.getElementById("imgApi").src = imgApi;
                    document.getElementById("note").innerHTML = 'Ready?';
                    clearInterval(timer);
                    timer = setInterval(() => {
                        timeLeft--;
                        document.getElementById("timer").textContent = timeLeft;
                        if (timeLeft <= 0) {
                            handleTimeOut();
                        }
                    }, 1000);
                })
                .catch(error => {
                    console.error('Error fetching image from the API:', error);
                });
        }

        function resetGame() {
            fetch('actions/updateScore.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    score: score
                }),
            })

            .then(response => response.json())

            .then(data => {
                console.log(data);
            })

            .catch(error => {
                console.error('Error:', error);
            });
            
            timeLeft = 30;
            score = 0;
            numQuestions = 1;
            currentLevel = 1;
            updateUI();
            fetchImage();
        }

        window.addEventListener('beforeunload', function () {
            localStorage.setItem('timeLeft', timeLeft);
            localStorage.setItem('score', score);
            localStorage.setItem('numQuestions', numQuestions);
            localStorage.setItem('currentLevel', currentLevel);
        });

        document.addEventListener("DOMContentLoaded", function () {
            updateUI();
            fetchImage();
        });
    </script>
</head>

<body>
    <div class="image-container">
        <nav class="navbar">
            <h1 class="logo">QUEZZY BUNCH</h1>
            <div class="links">
                <a href="index.php"><i class="bi bi-house custom-icon"></i></i></a>
                <a href="profile.php"><i class="bi bi-person-fill custom-icon"></i></i></a>
                <a href="logout.php"><i class="bi bi-power custom-icon"></i></a>
                <button class="" id="mutebtn"><i class="bi bi-volume-up-fill"></i></button>
            </div>
        </nav>

        <div class="container">
            <div class="sTitle">LET'S PLAY ! </div>

            <div class="single-Data">
                <span>Level <span id="level-no">1</span></span>
                <span>Question<span id="question-number">1</span></span>
                <span>Score<span id="score">0</span></span>
                <span>Time <span id="timer">30</span></span>
            </div>
            <div class="imgApi">
                <img src="" alt="Question Image" id="imgApi" class="color-image">
            </div>

            <div class="ans-align">
                <p class="txtAns">Enter The Answer : </p>
                <input type="number" class="input-field" id="answer" name="input" placeholder="Enter Answer" min="0">
                <button type="submit" class="btnGo" onclick="handleInput()">Go!</button>
            </div>
            <div id="note"></div>

        </div>
    </div>
    <audio id="music">
        <source type="audio/mp3" src="assets/audio/bg_music.mp3">
    </audio>

</body>

</html>
