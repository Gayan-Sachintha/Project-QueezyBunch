<?php

$conn = mysqli_connect('localhost','root','','queezybunch') or die('connection failed');
session_start();

function redirect($url)
{
    echo "<script>window.location.href = '$url';</script>";
    die();
}

?>