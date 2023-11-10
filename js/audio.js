//for index 

document.addEventListener("DOMContentLoaded", function () {
    const startbtn = document.getElementById("startbtn");
    const tone = new Audio("../assets/audio/goThrough.mp3");

    startbtn.addEventListener("click", function () {
        tone.play();
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const muteButton = document.getElementById("mutebtn");
    const backgroundAudio = new Audio("../assets/audio/bg_music.mp3"); 
    let isMuted = false;

    
    muteButton.addEventListener("click", function() {
        if (isMuted) {
            backgroundAudio.loop = true;
            backgroundAudio.play();
            muteButton.innerHTML = '<i class="bi bi-volume-up-fill"></i>';
        } else {
            backgroundAudio.loop = false;
            backgroundAudio.pause();
            muteButton.innerHTML = '<i class="bi bi-volume-mute-fill"></i>';
        }
        isMuted = !isMuted;
    });
});

//for login

document.addEventListener("DOMContentLoaded", function () {
    const loginbtn = document.getElementById("loginbtn");
    const regbtn = document.getElementById("regbtn");

    const tone = new Audio("../assets/audio/goThrough.mp3");

    loginbtn.addEventListener("click", function () {
        tone.play();
    });

    regbtn.addEventListener("click", function () {
        tone.play();
    });
});


//for register

document.addEventListener("DOMContentLoaded", function () {
    const startbtn = document.getElementById("cancelbtn");
    const regbtn = document.getElementById("regbtn");

    const tone = new Audio("../assets/audio/goThrough.mp3");

    cancelbtn.addEventListener("click", function () {
        tone.play();
    });
    regbtn.addEventListener("click", function () {
        tone.play();
    });
});