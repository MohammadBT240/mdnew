<?php
if (!isset($_SESSION['id'])) {
  // $_SESSION['status'] = "Invalid";
  $_SESSION['log_message'] = "Please login to access this page";
  header("location: ../dist/");
  exit;
}
?>