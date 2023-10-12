<!-- Signup page for new users -->

<!DOCTYPE html>
<html>
<head>
    <title>POS Pizza Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form method="post">
    <h2>Create your POS Pizza Account</h2>
    <div>
        <label for="firstname">First Name</label><br>
        <input type="text" id="firstname" name="firstname" placeholder="Enter first name" required>
    </div>
    <br>

    <div>
        <label for="lastname">Last Name</label><br>
        <input type="text" id="lastname" name="lastname" placeholder="Enter last name" required>
    </div>
    <br>

    <div>
        <label for="mi">M.I.</label><br>
        <input type="text" id="mi" name="mi" placeholder="Enter middle initial" maxlength="1">
    </div>
    <br>
    <div>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="Enter email address" required>
    </div>
    <br>
    <div>
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" placeholder="Choose a username" required>
    </div>
    <br>

    <div>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" placeholder="Choose a password" required>
    </div>
    <br>

    <div>
        <label for="confirmpassword">Confirm Password</label><br>
        <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm your password" required>
    </div>
    <br>

    <input type="submit" value="Sign Up">
</form> 

</body>
</html>
