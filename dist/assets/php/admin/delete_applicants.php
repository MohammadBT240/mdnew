<?php 
include('../connection.php');

// Retrieve the record ID from the request data
$id = $_POST['id'];

// Perform your validation and deletion logic here
// For example, you can use a DELETE SQL query

$sql = "DELETE FROM applicants WHERE applicant_id = '$id'";
$result = mysqli_query($con, $sql);

if ($result) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($con);
}

?>