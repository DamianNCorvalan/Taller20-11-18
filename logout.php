<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
$url = 'home.php';
header("Location: $url");
exit();
?>