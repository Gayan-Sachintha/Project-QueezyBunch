<?php

if(isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select_users = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'") or die ('query failed');

    if(mysqli_num_rows($select_users) > 0) {
        $row = mysqli_fetch_assoc($select_users);

        // Use password_verify to check if the provided password matches the hashed password
        if(password_verify($password, $row['password'])) {
            $_SESSION['user_name'] = $row['fullName'];
            $_SESSION['user_email'] = $row['email'];
            header('location:index.php');
        } else {
            $message[] = 'Incorrect email or password!';
        }
    } else {
        $message[] = 'User not found!';
    }
}

?>