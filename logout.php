<?php
// Effectively logout function for navbar and will send to home page and clear session
session_start();
session_destroy(); // This will clear the session
header("Location: index.php"); // Redirecting to index.php
exit();
?>
