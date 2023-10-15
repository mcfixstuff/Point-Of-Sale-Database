<?php

include 'database.php'; // Include the database connection details
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Check if the form has been submitted

    // Extracting data from the form
    $first_name = $mysqli->real_escape_string($_POST['first_name']);
    $middle_initial = $mysqli->real_escape_string($_POST['middle_initial']);
    $last_name = $mysqli->real_escape_string($_POST['last_name']);
    $birthday_month = $mysqli->real_escape_string($_POST['birthday_month']);
    $birthday_day = $mysqli->real_escape_string($_POST['birthday_day']);
    $address = $mysqli->real_escape_string($_POST['address']);
    $address2 = $mysqli->real_escape_string($_POST['address2']);
    $city = $mysqli->real_escape_string($_POST['city']);
    $state = $mysqli->real_escape_string($_POST['state']);
    $zip_code = $mysqli->real_escape_string($_POST['zip_code']);
    $phone_number = $mysqli->real_escape_string($_POST['phone_number']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = password_hash($mysqli->real_escape_string($_POST['password']), PASSWORD_DEFAULT); // Hashing the password before storing it in the database

    // Inserting the data into the database
    $sql = "INSERT INTO customers (first_name, middle_initial, last_name, birthday_month, birthday_day, address, address2, city, state, zip_code, phone_number, email, password) 
            VALUES ('$first_name', '$middle_initial', '$last_name', '$birthday_month', '$birthday_day', '$address', '$address2', '$city', '$state', '$zip_code', '$phone_number', '$email', '$password')";

    if ($mysqli->query($sql) === TRUE) {
        // echo "Account created successfully!";
        $mysqli->close();
        header('Location: home.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

}
?>