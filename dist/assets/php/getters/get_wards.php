<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "mdnew");

// Get state name from AJAX request
$localGovernment = $_POST['localGovernment'];

// Fetch local governments based on the selected state
$query = "SELECT * FROM ward 
WHERE local_government_name = '$localGovernment' 
ORDER BY local_government_name ASC";
$result = mysqli_query($conn, $query);

$ward = array();

while ($row = mysqli_fetch_assoc($result)) {
    $ward[] = $row;
}

// Return cities as JSON response
echo json_encode($ward);
