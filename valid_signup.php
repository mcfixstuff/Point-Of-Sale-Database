<?php
$host = 'pospizza.mysql.database.azure.com';
$dbname = 'pos';
$username = 'danielgarza';
$password = '#drgarza8';

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