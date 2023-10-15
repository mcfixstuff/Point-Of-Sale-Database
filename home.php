<?php
session_start();
?>
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
    </div>

    <?php
    if(isset($_SESSION['first_name']) && !empty($_SESSION['first_name'])){
        echo "<h2>Welcome back, " . htmlspecialchars($_SESSION['first_name']) . "!</h2>";
    } else {
        echo "<h2>Thank you for joining POS Pizza family!</h2>";
    }
    ?>

    <form action="" method="post">
        <a class="button">Order now!</a>
    </form> 

</body>
</html>
