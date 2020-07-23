<?php
session_start();
session_destroy();
echo '<script>alert("You Logout Successfully.")</script>';
header("refresh:0; url=http://localhost/Bakery/index.php");
?>