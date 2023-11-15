<?php

// Fetch user data to populate the form fields
$userEmail = $_SESSION['user_email'];
$selectUser = mysqli_query($conn, "SELECT * FROM users WHERE email = '$userEmail'") or die('Query failed');
$row = mysqli_fetch_assoc($selectUser);

if (isset($_POST['updatebtn'])) {
    $updatefullName = $_POST['updatefullName'];
    $updateage = $_POST['updateage'];
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];

    // Check if the current password matches the one stored in the database
    $storedPassword = $row['password'];
    if (password_verify($currentPassword, $storedPassword)) {
        // Current password is correct, proceed with the update
        $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $sql = "UPDATE `users` SET `fullName` = '$updatefullName', `age` = '$updateage', `password` = '$hashedNewPassword' WHERE `users`.`email` = '$userEmail';";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            redirect('profile.php');
        } else {
            redirect('login.php?code=3');
        }
    } else {
        // Current password is incorrect, show an error message
        $message[] = 'Passwords Not Matching!';
    }
}
 // password error notification 

 if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
    }
?>