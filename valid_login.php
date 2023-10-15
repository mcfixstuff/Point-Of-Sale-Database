<?php
include 'database.php';  // Assuming you have a database.php to handle your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $_POST['password'];  // Don't escape this, you'll hash it

    $result = $mysqli->query("SELECT * FROM customers WHERE username='$username'");

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            // Successful login
            // Start a session and set session variables, or do whatever you want upon a successful login
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            // Redirect to a logged-in page or dashboard
            header("Location: home.php");
        } else {
            // Password doesn't match
            echo "Incorrect password!";
        }
    } else {
        // User doesn't exist
        echo "User does not exist!";
    }
}
?>

