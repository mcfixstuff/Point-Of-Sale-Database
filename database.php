<?php
$host = "pospizza.mysql.database.azure.com";
$dbname = "pos";
$username = "danielgarza";
$password = "#drgarza8";
$port = 3306;
$mysqli = mysqli_init();
mysqli_ssl_set($mysqli, NULL, NULL, "./DigiCertGlobalRootCA.crt.pem", NULL, NULL);
if (!$mysqli->real_connect($host, $username, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("Connection error: " . $mysqli->connect_error);
}
return $mysqli;

/*
// Sample query to test connection and fetch data
$query = "SELECT * FROM your_table_name"; // replace 'your_table_name' with one of your table names
$result = mysqli_query($con, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Example: Display each row's data
        echo "Data: " . $row['your_column_name'] . "<br>"; // replace 'your_column_name' with one of your column names
    }
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($con);
}
// */