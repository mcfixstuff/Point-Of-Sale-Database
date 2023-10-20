<!-- Employee page. Only validated users will be able to access this page -->

<!DOCTYPE html>
<html>
<head>
    <title>Employee Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/pizza.ico" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <!-- <a href="#">Order Now</a>
        <a href="#">Profile</a> -->
    </div>

<form action="validate_login.php" method="post">
    <h2>Login to your Employee Account</h2>
    <div>
        <label for="username">Employee ID  </label>
        <input 
            type="text" 
            id="employeeID" 
            name="employeeID"
            placeholder="Enter employee ID"
            required>
    </div>
    <br>
    <div>
        <label for="password">Password  </label>
        <input 
            type="password" 
            id="password"
            name="password"
            placeholder="Enter password"
            required>
    </div>
    <br>
    <input class = button type="submit" value="Login">

    <div>
      <p><a href="employee_register.php">Register new employee here</a></p>
    </div>

</form> 

</body>
</html>
