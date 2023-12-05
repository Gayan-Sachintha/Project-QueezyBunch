<?php
ini_set('memory_limit', '256M'); 

include "../Controller/config.php";

$data = json_decode(file_get_contents('php://input'), true);

$score = $data['score'];
$playerID = $_SESSION['user_email'];
$sql = "INSERT INTO `scores`(`playerID`, `score`) VALUES ('$playerID','$score')";

if ($conn->query($sql) === TRUE) {
    $response = array("status" => "success", "message" => "Game reset successfully");
} else {
    $response = array("status" => "error", "message" => "Error resetting game: " . $conn->error);
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);

?>
