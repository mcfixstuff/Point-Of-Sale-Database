University of Houston Database Systems (COSC 3380) with Dr. Uma Ramamurthy

This project is a web-based point of sale management system for the University of Houston. A pizza shop was selected to demonstrate the point of sale concept. It was developed by Team 13 as part of the COSC 3380 course. 

Web App URL

    https://pospizzawebapp.azurewebsites.net/
    
Team Members

    Daniel Garza
    Ibtisam Amjad
    Bryant Huynh
    David Cooper
    Eric Parsons

The following technologies were used to develop this project:

    HTML/CSS/JavaScript
    PHP
    MySQL
    Microsoft Azure
    MySQL Workbench
    GitHub
    Visual Studio Code

Steps to setup a PHP based Web App:

    1. Create Azure Database for MySQL flexible server
    2. Connect MySQL Workbench to Azure Database
    3. Create Azure Web App
    4. Setup continous deployment from Github repository to Web App
    5. Connect Web App to Azure Database
     Now Workbench is connected to the database, the app is connected to the database, and the repository is connected to the app.

To create an Azure SQL flexible server:

    Log in to the Azure portal (https://portal.azure.com).
    Click on "Create a resource" in the upper left-hand corner of the screen.
    Search for "Azure SQL" and select "Azure Database for MySQL servers" from the results.
    Click "Create" to begin creating the server.
    Select Flexible Server.
    Fill out the required information, such as server name, admin username and password, and location. This will be needed when connecting to Workbench.
    Choose the appropriate pricing tier and click "Review + create" to review your selections.
    Click "Create" to create the server.
    Once the server is created, click on the "Networing" tab and add your IP address to the firewall rules. You can do this by clicking "+ Add current client IP address".
    You will need to update your IP address anytime you access the database from a new IP.
    Go to databases and select Add. Name the database and select:
        Character Set: utf8mb4
        Collation: utf8mb4_unicode_ci
    Now your server is created.

To connect with MySQL workbench, follow the steps below:

    Click the + symbol in the MySQL Connections tab to add a new connection.
    Enter a name for the connection in the Connection name field.
    Select Standard (TCP/IP) as the Connection Type.
    Enter {servername}.mysql.database.azure.com in hostname field.
    Enter {adminuser} as username and then enter your Password.
    Leave port # as 3306
    Go to the SSL tab and update the Use SSL field to Require.
    In the SSL CA File field, enter the file location of the DigiCertGlobalRootCA.crt.pem file.
    Enter same password for the admin user from the Azure Server
    Click Test Connection to test the connection.
    If the connection is successful, click OK to save the connection.
    Your Azure database is now connected to Workbench.


To create an Azure Web App and deploy the project files to it, you can follow these steps:

    Log in to the Azure portal (https://portal.azure.com/).
    Click on "Create a resource" button in the left menu, then select "Web App".
    Fill in the required information, such as the subscription, resource group, name of the web app, and operating system.
    Under "Publish", select "Code".
    Under "Runtime stack", select PHP (latest version).
    Under the deployment tab, enable continous deployment, and link the GitHub repository you will use for your project. 
    This connects the Web App to the repository. Once the web app is created, you can deploy your project files by uploading to this repository.
    Under the networking tab, ensure "Enable public access" is on.
    After the deployment is complete, you can access the web app through its URL in the Azure portal
    Now select review and create.

To connect Web App to Azure Database:

    Under configuration, select "New application setting" and enter the following individually:
        DB_HOST using the server name
        DB_NAME using admin username
        DB_PASS using adminusername password
        DB_NAME using the database name you created earlier.
    Your Azure database is now connected to the Web App.


The next steps will show how to create a table in mySQL Workbench and a PHP file that will allow you to input information on your Web App that saves to your database.

1. Create a table titles "users" in mySQL Workbench. Run the following SQL command:

    CREATE TABLE users (
        username VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    );

2. Create a database.php file in GitHub repository and paste the following:

        <?php
        $host = "{servername}.mysql.database.azure.com";
        $dbname = "{database name}";
        $username = "{admin user}";
        $password = "{admin user password}";
        $port = 3306;
        $mysqli = mysqli_init();
        mysqli_ssl_set($mysqli, NULL, NULL, "./DigiCertGlobalRootCA.crt.pem", NULL, NULL);
        if (!$mysqli->real_connect($host, $username, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL)) {
            die("Connection error: " . $mysqli->connect_error);
        }

2. Create a index.php file in GitHub repository. This will be the default web page when you deploy your web app. For this example, it will be a basic a page to create an account. Paste the following:

        <!DOCTYPE html>
        <head>
        <title>Welcome</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .account-container {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 300px;
            }

            .account-container h2 {
                margin-bottom: 20px;
                text-align: center;
            }

            .account-input {
                width: 95%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .account-button {
                width: 100%;
                padding: 10px;
                border: none;
                border-radius: 5px;
                background-color: #333;
                color: #fff;
                cursor: pointer;
            }
        </style>
        </head>
            <body>
                <div class="account-container">
                    <h2>Create Account</h2>
                    <form action="valid_test.php" method="post">
                        <input type="text" name="username" placeholder="Username" class="account-input" required>
                        <input type="password" name="password" placeholder="Password" class="account-input" required>
                        <button type="submit" class="account-button">Sign up now</button>
                    </form>
                </div>
            </body>
        </html>


3. Create a valid_signup.php file in GitHub repository. This is the SQL code that will send the input to your database. Paste the following:

        <?php
        include 'database.php';
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Extracting data from the form
            $username = $mysqli->real_escape_string($_POST['username']);
            $password = password_hash($mysqli->real_escape_string($_POST['password']), PASSWORD_DEFAULT); // Hashing the password before storing it in the database

            // Inserting the data into the database
            $sql = "INSERT INTO users (username, password) 
                    VALUES ('$username', '$password')";

            if ($mysqli->query($sql) === TRUE) {
                $mysqli->close();
                // If successful, redirect to specfied page
                header('Location: welcome.php');
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }

        }
        ?>

4. Ensure your data was entered into the database. Enter the following command in mySQL Workbench to see your data:

    SELECT * FROM USERS;

To give database access to other users:

    Have the user give you their IP address. Under "Networking" in the Azure database, create a new firewall rule name. 
    Enter the IP address under Start IP address and End IP address.
    From the admin user's account in MySQL Workbench, run the command: CREATE USER 'username'@'%' IDENTIFIED BY 'password'
    Then run the command: GRANT ALL PRIVILEGES ON database_name.* TO 'username'@'%'
    This will create the username and password for the user, and give the user access to view and edit the database in Workbench.
    Now the user will do the following:
        Go to mySQL Workbench and select the + sign.
        Enter a name for the connection in the Connection name field.
        Select Standard (TCP/IP) as the Connection Type.
        Leave port # as 3306
        Enter the server name under hostname: {servername}.mysql.database.azure.com
        Enter the username and password the admin created for the user.
        Test connection and press OK after successfully connecting.
    
    
