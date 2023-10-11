<?php
$servername = "pospizza.mysql.database.azure.com";
$username = "danielgarza";
$password = "#drgarza8";
$database = "pos";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Successful login
    echo "Logged in successfully!";
    // You can also redirect the user to another page, for example:
    // header("Location: dashboard.php");
} else {
    echo "Invalid username or password.";
}
$conn->close();
?>
