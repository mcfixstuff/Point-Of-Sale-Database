<?php

// Database Configuration and Connection
$con = mysqli_init();

// SSL setup
$path_to_CA_cert = "/Users/danielgarza/Desktop/VS Code/3380/My Project/DigiCertGlobalRootCA.crt.pem"; // Make sure to provide the correct path
mysqli_ssl_set($con, NULL, NULL, $path_to_CA_cert, NULL, NULL); 

// Establishing the connection
$host = "pospizza.mysql.database.azure.com";
$username = "danielgarza";
$password = "#drgarza8"; // replace with your actual password
$database = "mysql"; // replace with your actual database name

if (!mysqli_real_connect($con, $host, $username, $password, $database, 3306, MYSQLI_CLIENT_SSL)) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
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
*/

// Close the database connection
mysqli_close($con);

?>
