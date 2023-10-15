<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    // Access users tables
    $result = $mysqli->query("SELECT * FROM users WHERE username='$username'");

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            // Successful login
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            // Redirect to a logged-in page or dashboard
            header("Location: welcome.php");
        } else {
            // Password doesn't match
            session_start();
            $_SESSION['error'] = "Incorrect password!";
            header("Location: test.php"); 
        }
    } else {
        // User doesn't exist
        session_start();
        $_SESSION['error'] = "Email not found";
        header("Location: test.php"); 
    }
}
?>

