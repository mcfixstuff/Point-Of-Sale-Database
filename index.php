<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form action="validate_login.php" method="post">
    <h2>Login Page</h2>
    <div>
        <label for="username">Username:</label><br>
        <input 
            type="text" 
            id="username" 
            name="username"
            placeholder="Enter username"
            required>
    </div>
    <br>
    <div>
        <label for="password">Password:</label><br>
        <input 
            type="password" 
            id="password"
            name="password"
            placeholder="Enter password"
            required>
    </div>
    <br><br>
    <input type="submit" value="Login">

    <br>
    <p>First time customer? <a href="/sign_up">Sign up now and start earning!</a></p>
</form> 

</body>
</html>
