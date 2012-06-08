<?php
session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
     echo 'You must login to view this page <a href="login.php">Login Here</a>';
     exit;
}
?>