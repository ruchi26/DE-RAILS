<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('You have been successfully logged out');</script>";
header("location:login.php");
?>