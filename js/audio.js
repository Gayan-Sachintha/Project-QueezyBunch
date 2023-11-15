//for index 

document.addEventListener("DOMContentLoaded", function () {
    const startbtn = document.getElementById("startbtn");
    const tone = new Audio("../assets/audio/goThrough.mp3");

    startbtn.addEventListener("click", function () {
        tone.play();
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