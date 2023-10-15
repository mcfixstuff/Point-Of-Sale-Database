
<!DOCTYPE html>
<html>
<head>
    <title>POS Pizza</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/pizza.ico" type="image/x-icon">
</head>
<body>
    <?php
        if (isset($_SESSION['first_name'])) {
            echo "Hello " . $_SESSION['first_name'] . ", welcome back!";
        }
    ?>
    <div class="navbar">
        <a href="index.php">Home</a>
        <!-- <a href="#">Order Now</a>
        <a href="#">Profile</a> -->
    </div>
    
<form action="" method="post">
    <h2>Thank you for joining POS Pizza family!</h2>

    <a class="button">Order now!</a>
    
    </div>
</form> 

</body>
</html>