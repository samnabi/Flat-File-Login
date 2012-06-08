<?php
session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
     header('Location: login.php');
     exit;
}
?>