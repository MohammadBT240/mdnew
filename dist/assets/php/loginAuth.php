<?php
session_start();
include "connection.php";

if (isset($_POST['submit'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   $username = mysqli_real_escape_string($con, $username);
   $password = mysqli_real_escape_string($con, $password);

   if (empty($username) || empty($password)) {
      $_SESSION['status'] = "Invalid";
      $_SESSION['message'] = "Please fill in all the fields";
      header("location: ../../");
      exit;
   }

   $query = "SELECT * FROM registration WHERE email = '{$username}'";
   $select_user_query = mysqli_query($con, $query);

   if (!$select_user_query) {
      die("Query Failed" . mysqli_error($con));
   }

   $row = mysqli_fetch_array($select_user_query);

   // Check applicants table
   if (!$row) {
      $query = "SELECT * FROM applicants WHERE applicant_id = '{$username}'";
      $select_user_query = mysqli_query($con, $query);

      if (!$select_user_query) {
         die("Query Failed" . mysqli_error($con));
      }

      $row = mysqli_fetch_array($select_user_query);
   }

   // Check applicants_id table
   if (!$row) {
      $query = "SELECT * FROM applicants_id WHERE applicant_id = '{$username}'";
      $select_user_query = mysqli_query($con, $query);

      if (!$select_user_query) {
         die("Query Failed" . mysqli_error($con));
      }

      $row = mysqli_fetch_array($select_user_query);
   }

   if (!$row) {
      $_SESSION['status'] = "Invalid";
      $_SESSION['message'] = "Invalid Username or Password";
      header("location: ../../");
      exit;
   }

   $userType = $row['type'];
   $password_column = 'password';
   $dashboard_page = '';

   switch ($userType) {
      case 'Applicant':
         $query = "SELECT * FROM applicants WHERE applicant_id = '{$username}'";
         $dashboard_page = "adashboard.php";
         break;
      case 'Admin':
         $dashboard_page = "dashboard.php";
         break;
      case 'Executive':
         $dashboard_page = "edashboard.php";
         break;
      default:
         $_SESSION['status'] = "Invalid";
         $_SESSION['message'] = "Invalid User Type";
         header("location: ../../");
         exit;
   }

   $_SESSION['id'] = $row['id'];
   $_SESSION['first_name'] = $row['first_name'];
   $_SESSION['surname'] = $row['surname'];
   $_SESSION['name'] = $row['first_name'] . ' ' . $row['surname'];
   $_SESSION['email'] = $row['email'];
   $_SESSION['user_type'] = $row['type'];
   $_SESSION['type'] = $row['type'];

   // echo $_SESSION['type'];
   if ($userType == 'Applicant' && $dashboard_page == 'adashboard.php') {
      // Additional logic for Applicant dashboard
      $_SESSION['applicant_id'] = $row['applicant_id'];
   }

   if ($password !== $row[$password_column] && !password_verify($password, $row[$password_column])) {
      $_SESSION['status'] = "Invalid";
      $_SESSION['message'] = "Invalid Login Details";
      header("location: ../../");
      exit;
   }
   header("location: ../../$dashboard_page");
} else {
   $_SESSION['status'] = "Invalid";
   $_SESSION['message'] = "Details submission failed";
   header("location: ../../");
   exit;
}
