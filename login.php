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

<form action="valid_login.php" method="post">
    <h2>Login to your POS Pizza Account</h2>
    <div>
        <label for="username">Email address  </label>
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
    
    <div id="errorMessage" style="color: red;"></div> <!-- This will display our error -->
    <input class="button" type="submit" value="Login">
    
    <div>
      <p>Not a member? <a href="signup.php">Sign up now!</a></p>
      
      <p><a href="employee.php">Employee login</a></p>
    </div>
</form> 

</body>
</html>