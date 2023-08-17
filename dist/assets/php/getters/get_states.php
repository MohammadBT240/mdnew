<?php
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "mdnew");

    // Get country name from AJAX request
    $country_name = $_POST['country'];

    // Fetch states based on the selected country
    $query = "SELECT * FROM states 
              INNER JOIN countries ON states.country_id = countries.id 
              WHERE countries.country = '$country_name' 
              ORDER BY states.state_name ASC";
    $result = mysqli_query($conn, $query);

    $states = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $states[] = $row;
    }

    // Return states as JSON response
    echo json_encode($states);
?>
