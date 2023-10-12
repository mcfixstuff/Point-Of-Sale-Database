<!-- Employee page. Only validated users will be able to access this page -->

<!DOCTYPE html>
<html>
<head>
    <title>Employee Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form action="validate_login.php" method="post">
    <h2>Login to your Employee Account</h2>
    <div>
        <label for="username">Employee ID</label><br>
        <input 
            type="text" 
            id="employeeID" 
            name="employeeID"
            placeholder="Enter employee ID"
            required>
    </div>
    <br>
    <div>
        <label for="password">Password</label><br>
        <input 
            type="password" 
            id="password"
            name="password"
            placeholder="Enter password"
            required>
    </div>
    <br>
    <input type="submit" value="Login">

</form> 

</body>
</html>
