<!DOCTYPE html>
<html>
<head>
    <title>POS Pizza</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="/pizza.ico" type="image/x-icon">
</head>
<body>

<form action="validate_login.php" method="post">
    <h2>Login to your POS Pizza Account</h2>
    <div>
        <label for="username">Username  </label>
        <input 
            type="text" 
            id="username" 
            name="username"
            placeholder="Enter username"
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
    
    <input type="submit" value="Login">
    
    <div>
      <p>Not a member? <a href="signup.php">Sign up now!</a></p>
      
      <p><a href="employee.php">Employee login</a></p>
    </div>
</form> 

</body>
</html>