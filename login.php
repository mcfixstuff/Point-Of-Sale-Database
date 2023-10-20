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
      <p><a href="employee.php">Employee login</a></p>
    </div>
</form> 

</body>
</html>