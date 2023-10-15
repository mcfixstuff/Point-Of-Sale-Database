<?php
include 'database.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Extracting data from the form
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = password_hash($mysqli->real_escape_string($_POST['password']), PASSWORD_DEFAULT); // Hashing the password before storing it in the database

    // Inserting the data into the database
    $sql = "INSERT INTO users (username, password) 
            VALUES ('$username', '$password')";

    if ($mysqli->query($sql) === TRUE) {
        $mysqli->close();
        // If successful, redirect to specfied page
        header('Location: welcome.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

}
?>