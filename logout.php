<?php
    //Logout file for nav bar. Will kill session and send to main page
    session_start();
    session_destroy(); // This will clear the session
    header("Location: index.php"); // Redirecting to index.php
    exit();
?>