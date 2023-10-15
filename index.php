<!-- Login page on opening web app page -->

<!-- <?php
    // Connect to database
    $mysqli = require __DIR__ . "/database.php";
    if (!$mysqli) {
        die("Failed to connect to database: " . mysqli_connect_error());
    }
?> -->

<!DOCTYPE html>
<html>
<head>
    <title>POS Pizza</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="pizza.ico" type="image/x-icon">
</head>
<body>

<form action="" method="post">
    <h2>Welcome to POS Pizza!</h2>

    <a href="login.php" class="button">Login</a>

    <a href="signup.php" class="button">Sign Up</a>
    
    <div>
      <p><a href="employee.php">Employee login</a></p>
    </div>
</form> 

</body>
</html>
