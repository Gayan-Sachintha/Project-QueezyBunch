<?php

if(isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select_users = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'") or die ('query failed');

    if(mysqli_num_rows($select_users) > 0) {
        $row = mysqli_fetch_assoc($select_users);

        // Use password_verify to check if the provided password matches the hashed password
        if(password_verify($password, $row['password'])) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['user_name'] = $row['fullName'];
            $_SESSION['user_email'] = $row['email'];
            header('location:howtoplay.php');
        } else {
            $message[] = 'Incorrect email or password!';
        }
    } else {
        $message[] = 'User not found!';
    }
}

//for logout

if (isset($_GET['logout'])) {

    $_SESSION = array();

    session_destroy();

    header("Location: login.php");
    exit();
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