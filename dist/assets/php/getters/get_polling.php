<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "mdnew");
// Retrieve the selected ward value from the AJAX request
$ward = $_POST['ward'];

// Sanitize the input to prevent SQL injection
$ward = mysqli_real_escape_string($conn, $ward);

// Fetch polling units based on the selected ward
$query = "SELECT * FROM polling
          WHERE ward = '$ward'
          ORDER BY polling_station ASC";
$result = mysqli_query($conn, $query);

$pollingUnits = array();

while ($row = mysqli_fetch_assoc($result)) {
    $pollingUnits[] = $row;
}

// Return the polling units data as JSON
echo json_encode($pollingUnits);
