University of Houston Database Systems (COSC 3380) with Dr. Uma Ramamurthy

This project is a web-based point of sale management system for the University of Houston. A pizza shop was selected to demonstrate the point of sale concept. It was developed by Team 13 as part of the COSC 3380 course. 

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

Steps to setup project:

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
    Under the deployment tab, enable continous deployment, and link the GitHub repository you will use for your project. This connects the Web App to the repository. Once the web app is created, you can deploy your project files by uploading to this repository.
    Under the networking tab, ensure "Enable public access" is on.
    After the deployment is complete, you can access the web app through its URL in the Azure portal
    Now select review and create.
    Connect to your database. Under configuration, select "New application setting" and enter the following individually:
        DB_HOST using the server name
        DB_NAME using admin username
        DB_PASS using adminusername password
        DB_NAME using the database name you created earlier.
    Your Azure database is now connected to the Web App.

To give access to partners.

    Have the user give you their IP address and manually input the IP under "Networking" in the Azure database. 
    From the admin user's account in MySQL Workbench, run the command: CREATE USER 'username'@'%' IDENTIFIED BY 'password'
    Then run the command: GRANT ALL PRIVILEGES ON database_name.* TO 'username'@'%'
    This will create the username and password for the user.
    Now have the user go to MySQL Workbench and enter the server name under hostname: {servername}.mysql.database.azure.com
    Enter the username and password the admin created for the user.
    Test connection and press OK after successfully connecting.
    
    
