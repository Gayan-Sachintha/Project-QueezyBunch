document.addEventListener("DOMContentLoaded", function() {

    var music = document.getElementById("music");
    var mutebtn = document.getElementById("mutebtn");

    mutebtn.onclick = function () {
        if (music.paused) {
            music.play();
            mutebtn.innerHTML = '<i class="bi bi-volume-mute-fill"></i>';
        } else {
            music.pause();
            mutebtn.innerHTML = '<i class="bi bi-volume-up-fill"></i>';
        }
    };
});
