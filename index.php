<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assuming the CSS file is in the same directory as the PHP file -->
</head>
<body>

  
  <form action="validate_login.php" method="post">
  <h2 align="center">Login Page</h2>
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
</form> 

</body>
</html>
