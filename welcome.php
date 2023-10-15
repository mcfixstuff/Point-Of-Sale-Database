<?php 
    // Check if the user is not logged in
    if (!isset($_SESSION['first_name'])) {
        // Redirect them to the login page
        header('Location: login.php');
        exit();
    } 
?>

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
    
<form action="" method="post">
    <h2>Thank you for joining the POS Pizza family!</h2>
    <a class="button">Order now!</a>
</form> 

</body>
</html>