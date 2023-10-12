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
<html>
<head>
    <title>POS Pizza Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <p><?php echo $message; ?></p>
    
    <form action="" method="post">
        First Name: <input type="text" name="first_name" placeholder="Enter first name" required><br>
        Middle Initial: <input type="text" name="middle_initial" maxlength="1" placeholder="Enter middle initial"><br>
        Last Name: <input type="text" name="last_name" placeholder="Enter last name" required><br>
        Birthday Month: <input type="number" name="birthday_month" min="1" max="12"><br>
        Birthday Day: <input type="number" name="birthday_day" min="1" max="31"><br>
        Address: <input type="text" name="address" required><br>
        Address Line 2 (Optional): <input type="text" name="address2"><br>
        City: <input type="text" name="city" required><br>
        State: <input type="text" name="state" maxlength="2" required><br>
        Zip Code: <input type="text" name="zip_code" placeholder="Enter Zip Code" pattern="\d{5}(-\d{4})?" required><br>
        Phone Number: <input type="text" name="phone_number" required><br>
        Email: <input type="text" name="email" placeholder="Enter email address" required><br>
        Password: <input type="password" name="password" placeholder="Choose a password" required>><br>
        <input type="submit" value="Sign Up">
    </form>

</body>
</html>


