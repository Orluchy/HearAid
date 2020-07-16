<?php

require_once 'config.php';
if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    mysqli_query($conn, "insert into emailcapture(email) values ('$email')");

    //Start the session if already not started.
    session_start();
    $_SESSION['success_message'] = "Email saved successfully.";
    header("Location: index.php");
    exit();
} else {
           session_start();
    $_SESSION['error_message'] = "There was an error saving the email.";

    header("Location: index.php");
    exit();
}
?>