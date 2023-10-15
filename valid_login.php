<?php
include 'database.php';  // Assuming you have a database.php to handle your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = $_POST['password'];  // Don't escape this, you'll hash it

    $result = $mysqli->query("SELECT * FROM customers WHERE email='$email'");

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            // Successful login
            // Start a session and set session variables, or do whatever you want upon a successful login
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $user['email'];
            // Redirect to a logged-in page or dashboard
            header("Location: home.php");
        } else {
            // Password doesn't match
            echo "<h2>Incorrect password</h2>";
            // session_start();
            // $_SESSION['error'] = "Incorrect password!";
            // header("Location: login.php"); 
        }
    } else {
        // User doesn't exist
        echo "<h2>Email not found</h2>";
        // session_start();
        // $_SESSION['error'] = "Email not found";
        // header("Location: login.php"); 
    }
}
?>

