<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $result = $mysqli->query("SELECT * FROM customers WHERE email='$email'");

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            // Successful login
            // Start a session and set session variables, or do whatever you want upon a successful login
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $user['email'];
            $_SESSION['first_name'] = $user['first_name'];

            // Redirect to a logged-in page or dashboard
            header("Location: home.php");
        } else {
            // Password doesn't match
            // echo "<h2>Incorrect password</h2>";
            session_start();
            $_SESSION['error'] = "Incorrect password!";
            header("Location: customer_login.php"); 
        }
    } else {
        // User doesn't exist
        // echo "<h2>Email not found</h2>";
        session_start();
        $_SESSION['error'] = "Email not found";
        header("Location: customer_login.php"); 
    }
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

<form action="customer_login.php" method="post">
    <h2>Login to your POS Pizza Account</h2>
    <div>
        <label for="email">Email address  </label>
        <input 
            type="text" 
            id="email" 
            name="email"
            placeholder="Enter email"
            required>
    </div> <br>

    <div>
        <label for="password">Password  </label>
        <input
            type="password" 
            id="password"
            name="password"
            placeholder="Enter password"
            required>
    </div> <br>
    
    <input class="button" type="submit" value="Login">

    <a href="signup.php" class="button">Sign up</a>

    <div>
      <p><a href="employee_login.php">Employee login</a></p>
    </div>
</form> 

</body>
</html>