<!-- Page for creating new employees -->

<!DOCTYPE html>
<head>
    <title>Employee Registration</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/pizza.ico" type="image/x-icon">
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <!-- <a href="#">Order Now</a>
        <a href="#">Profile</a> -->
    </div>
    <form action="valid_signup.php" method="post">
        <h2>Create Employee Account</h2>
        <div>       
            <label for="E_First_Name">Name  </label>
            <input type="text" id="E_First_Name" name="E_First_Name" placeholder="First" style="width: 75px;" required>
            <label for="E_Last_Name"></label>
            <input type="text" id="E_Last_Name" name="E_Last_Name" placeholder="Last" style="width: 75px;" required>
        </div><br>

        <!-- pulls current date and assigns to Hire_Date -->
        <input type="hidden" id="Hire_Date" name="Hire_Date">
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const currentDate = new Date();
                const formattedDate = `${currentDate.getFullYear()}/${(currentDate.getMonth() + 1).toString().padStart(2, '0')}/${currentDate.getDate().toString().padStart(2, '0')}`;
                document.getElementById('Hire_Date').value = formattedDate;
            });
        </script>

        <div>
            <label for="Title_Role">Role  </label>
            <select id="Title_Role" name="Title_Role" placeholder="Select role" style="width: 100px;"required>
                <option value="" selected disabled>Select</option>
                <option value="Team member">Team Member</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Manager">Manager</option>
        </div><br>
        
        <div>
            <label for="password">Password  </label>
            <input type="password" id="password" name="password" placeholder="Create password" required>
        </div><br>
        
        <!-- need to add SQL code to ensure passwords match and set up error if not -->
        <!-- <div>
            <label for="password">Confirm Password  </label>
            <input type="password" id="password" name="password" placeholder="Confirm password" required>
        </div><br> -->

        <div>
            <input class = button type="submit" value="Register">
        </form>
</body>
</html>



