<?php
$host = 'pospizza.mysql.database.azure.com';
$dbname = 'pos';
$username = 'danielgarza';
$password = '#drgarza8';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("
            INSERT INTO customers (
                first_name, middle_initial, last_name, birthday_month, birthday_day, 
                address, address2, city, state, zip_code, phone_number, email, password
            ) 
            VALUES (
                :first_name, :middle_initial, :last_name, :birthday_month, :birthday_day, 
                :address, :address2, :city, :state, :zip_code, :phone_number, :email, :hashed_password
            )
        ");

        $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Bind the parameters
        $stmt->bindParam(':first_name', $_POST['first_name']);
        $stmt->bindParam(':middle_initial', $_POST['middle_initial']);
        $stmt->bindParam(':last_name', $_POST['last_name']);
        $stmt->bindParam(':birthday_month', $_POST['birthday_month']);
        $stmt->bindParam(':birthday_day', $_POST['birthday_day']);
        $stmt->bindParam(':address', $_POST['address']);
        $stmt->bindParam(':address2', $_POST['address2']);
        $stmt->bindParam(':city', $_POST['city']);
        $stmt->bindParam(':state', $_POST['state']);
        $stmt->bindParam(':zip_code', $_POST['zip_code']);
        $stmt->bindParam(':phone_number', $_POST['phone_number']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':hashed_password', $hashed_password);

        $stmt->execute();

        $message = "Welcome to POS Pizza!";

    } catch(PDOException $e) {
        $message = "Error: " . $e->getMessage();
    }

    $conn = null;  // close connection
}
?>

<!-- Signup page for new users -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="" method="post">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" placeholder="Enter first name" required>

        <label for="middle_initial">Middle Initial</label>
        <input type="text" id="middle_initial" name="middle_initial" maxlength="1" placeholder="Enter middle initial">

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" placeholder="Enter last name" required>

        <label for="birthday_month">Birthday Month</label>
        <input type="number" id="birthday_month" name="birthday_month" min="1" max="12">

        <label for="birthday_day">Birthday Day</label>
        <input type="number" id="birthday_day" name="birthday_day" min="1" max="31">

        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Enter address" required>

        <label for="address2">Address Line 2</label>
        <input type="text" id="address2" name="address2" placeholder="Optional">

        <label for="city">City</label>
        <input type="text" id="city" name="city" placeholder="Enter city" required>

        <label for="state">State</label>
        <input type="text" id="state" name="state" maxlength="2" placeholder="Enter state" required>

        <label for="zip_code">Zip Code</label>
        <input type="text" id="zip_code" name="zip_code" placeholder="Enter Zip Code" pattern="\d{5}(-\d{4})?" required>

        <label for="phone_number">Phone Number</label>
        <input type="tel" id="phone_number" name="phone_number" placeholder="XXX-XXX-XXXX" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter email address" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Create password" required>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>



