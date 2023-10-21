<!DOCTYPE html>
<html>
<head>
    <title>POS Pizza</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/pizza.ico" type="image/x-icon">
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <!-- <a href="#">Order Now</a>
        <a href="#">Profile</a> -->
    </div>

    <?php 
        include 'database.php';
        // Check if the first_name is set in the session (or retrieve it from your database if needed)
        $name = $mysqli->query("SELECT * FROM customers WHERE first_name='$first_name'");

        if (isset($_SESSION['first_name'])) {
            echo "<h2>Time to order, " . $_SESSION['first_name'] . "!</h2>";
        } else {
            echo "<h2>Ready to order</h2>";
        }
    ?>

</body>
</html>