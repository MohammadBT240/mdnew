<?php
// Replace these with your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mdnew";

// Function to generate a random alphanumeric ID
function generateRandomID($length = 7) {
   $characters = '0123456789';
   $randomID = 'APP';
   for ($i = 0; $i < $length; $i++) {
       $randomID .= $characters[rand(0, strlen($characters) - 1)];
   }
   return $randomID;
}

// Check if the button is clicked
if (isset($_POST['generateButton'])) {
   // Create a connection
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check the connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

   // Generate and insert 150 IDs into the database
   for ($i = 0; $i < 150; $i++) {
       $randomID = generateRandomID();
       
       // Insert the generated ID into the database
       $sql = "INSERT INTO applicants_id (applicant_id) VALUES ('$randomID')";
       
       if ($conn->query($sql) !== TRUE) {
           echo "Error: " . $sql . "<br>" . $conn->error;
       }
   }

   echo "150 IDs inserted successfully!";

   // Close the connection
   $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Random ID Generator</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="generateButton">Generate and Insert ID</button>
    </form>
</body>
</html>
