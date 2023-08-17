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

   $query1 = "SELECT * FROM registration WHERE email = '{$username}'";
   $select_user_query = mysqli_query($con, $query1);

   if (!$select_user_query) {
      die("Query Failed" . mysqli_error($con));
   }

   $row = mysqli_fetch_array($select_user_query);
   $userType = $row['type'];

   // If user details are not found in the "newstaff" table, check the "committiee" table
   if (!$row) {
      $query1 = "SELECT * FROM applicants WHERE email = '{$username}'";
      $select_user_query = mysqli_query($con, $query1);

      if (!$select_user_query) {
         die("Query Failed" . mysqli_error($con));
      }

      $row = mysqli_fetch_array($select_user_query);
      $userType = $row['type'];
   }

   $query = "";
   $password_column = "";
   $dashboard_page = "";

   // Rest of the code remains the same...

   if ($userType == 'Applicant') {
      $query = "SELECT * FROM applicants WHERE email = '{$username}'";
      $password_column = 'password'; // Column name for password in registration table
      $dashboard_page = "adashboard.php"; // Staff dashboard page
   } elseif ($userType == 'Admin') {
      $query = "SELECT * FROM registration WHERE email = '{$username}'";
      $password_column = 'password'; // Column name for password in admin table
      $dashboard_page = "dashboard.php"; // Admin dashboard page
   } elseif ($userType == 'Executive') {
      $query = "SELECT * FROM registration WHERE email = '{$username}'";
      $password_column = 'password'; // Column name for password in executive table
      $dashboard_page = "edashboard.php"; // Executive dashboard page
   } else {
      $_SESSION['status'] = "Invalid";
      $_SESSION['message'] = "Invalid Username or Password";
      header("location: ../../");
      exit;
   }

   if (!$row || ($password !== $row[$password_column] && !password_verify($password, $row[$password_column]))) {
      $_SESSION['status'] = "Invalid";
      $_SESSION['message'] = "Invalid Login Details";

      header("location: ../../");
      exit;
   } else {
      $db_id = $row['id'];
      $db_username = $row['email'];
      $db_password = $row['password'];
      $db_firstN = $row['first_name'];
      $db_middleN = $row['last_name'];
      $db_surname = $row['surname'];
      $db_userType = $row['type'];

      $_SESSION['id'] = "$db_id";
      $_SESSION['first_name'] = "$db_firstN";
      $_SESSION['surname'] = "$db_surname";
      $_SESSION['name'] = "$db_firstN $db_surname";
      $_SESSION['email'] = "$db_username";
      $_SESSION['user_type'] = "$db_userType";
      $_SESSION['type'] = $db_userType;

      // Check user type and redirect to the appropriate dashboard
      if ($userType == 'Applicant' && $db_userType == 'Applicant' && $dashboard_page == 'adashboard.php') {
         // Successful login
         // Fetch the committee record from the committiee table
         $query3 = "SELECT * FROM applicants WHERE email = '{$username}'";
         $select_user_query3 = mysqli_query($con, $query3);

         if (!$select_user_query3) {
            die("Query Failed" . mysqli_error($con));
         }

         $row = mysqli_fetch_array($select_user_query3);
         $userType = $row['type'];

         $db_id = $row['id'];
         $db_username = $row['email'];
         $db_password = $row['password'];
         $db_firstN = $row['first_name'];
         $db_middleN = $row['last_name'];
         $db_surname = $row['surname'];
         $db_userType = $row['type'];

         $_SESSION['id'] = "$db_id";
         $_SESSION['first_name'] = "$db_firstN";
         $_SESSION['surname'] = "$db_surname";
         $_SESSION['name'] = "$db_firstN $db_surname";
         $_SESSION['email'] = "$db_username";
         $_SESSION['user_type'] = "$db_userType";
         $_SESSION['type'] = $db_userType;

         header("location: ../../$dashboard_page");
      } elseif ($userType == 'Admin' && $db_userType == 'Admin' && $dashboard_page == 'dashboard.php') {
         // Successful login
         header("location: ../../$dashboard_page");
      } elseif ($userType == 'Executive' && $db_userType == 'Executive' && $dashboard_page == 'edashboard.php') {
         // Successful login
         header("location: ../../$dashboard_page");
      } else {
         $_SESSION['status'] = "Invalid";
         $_SESSION['message'] = "Invalid User Type";
         header("location: ../../");
         exit;
      }
   }
} else {
   $_SESSION['status'] = "Invalid";
   $_SESSION['message'] = "Details submission failed";
   header("location: ../../");
   exit;
}
