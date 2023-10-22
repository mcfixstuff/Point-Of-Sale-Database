<?php
    //Logout file for nav bar. Will kill session and send to main page
    session_start();
    include 'database.php';

     // Check if the user is logged in
     if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $Employee_ID = $_SESSION['user']['Employee_ID'];

        // mark employee as clocked out
        $mysqli->query("UPDATE employee SET clocked_in=0 WHERE Employee_ID='$Employee_ID'");

        //close connection
        $mysqli->close();
    }

    session_destroy(); // This will clear the session
    header("Location: index.php"); // Redirecting to index.php
    exit();
?>