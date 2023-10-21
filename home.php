<?php
// Start the session at the beginning of the file
session_start();

// Check if user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "<h2>Welcome back, " . $_SESSION['first_name'] . "!</h2>";
} else {
    echo "Please log in first.";
    header("Location: customer_login.php");
}
?>


<!-- Page after user logs in -->
<!DOCTYPE html>
<html>
<head>
    <title>POS Pizza</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/pizza.ico" type="image/x-icon">
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <!-- <a href="#">Order Now</a>
        <a href="#">Profile</a> -->
    </div>

    <a class="button">Order now!</a>

</body>
</html>
