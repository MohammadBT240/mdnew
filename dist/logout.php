<?php
session_start();

$_SESSION['message'] = null;
$_SESSION['status'] = null;
$_SESSION['url'] = null;
$_SESSION['type'] = null;

unset($_SESSION["message"]);
unset($_SESSION["status"]);
unset($_SESSION["url"]);
unset($_SESSION["type"]);
// $_SESSION['message'] = "You have been logged out!";

$_SESSION['log_status'] = "Invalid";
$_SESSION['log_message'] = "You have been logged out!";
header("location: ../dist/");
session_destroy();
session_start();
// $_SESSION['status'] = "Invalid";
$_SESSION['log_message'] = "You have been logged out!";


?>