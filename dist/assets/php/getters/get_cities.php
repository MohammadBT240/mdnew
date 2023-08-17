<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "mdnew");

$state_name = $_POST['state'];

// Fetch local governments based on the selected state
$query = "SELECT * FROM local_goverment 
          WHERE state_name = '$state_name' 
          ORDER BY local_government ASC";
$result = mysqli_query($conn, $query);

$localGovernments = array();

while ($row = mysqli_fetch_assoc($result)) {
    $localGovernments[] = $row;
}

// Return cities as JSON response
echo json_encode($localGovernments);
