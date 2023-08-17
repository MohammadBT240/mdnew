<?php 
 
// Database connection info 
$dbDetails = array( 
    'host' => 'localhost', 
    'user' => 'root', 
    'pass' => '', 
    'db'   => 'mdnew' 
); 
 
// DB table to use 
$table = 'applicants'; 
 
// Table's primary key 
$primaryKey = 'id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 


$columns = array(
    array(
        'db' => 'id',
        'dt' => 0,
        'formatter' => function ($d) use (&$counter) {
            // Use the counter variable as the serial number
            return $counter++;
        }
    ),
    array('db'=> 'applicant_id','dt'=> 1),
    array(
        'db' => 'surname',
        'dt' => 2
    ),
    array('db' => 'gender', 'dt' => 3),
    array('db' => 'phone_number', 'dt' => 4),
    array('db' => 'email', 'dt' => 5),
    array('db' => 'identification', 'dt' => 6),
    array('db' => 'state', 'dt' => 7),
    array('db' => 'course', 'dt' => 8),
    array('db' => 'name_of_school', 'dt' => 9),
    array('db' => 'first_name', 'dt' => 10)
    // array('db' => 'gender', 'dt' => 4)

);
 
// Include SQL query processing class 
require '../ssp.class.php'; 
 
// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns ) 
); 
 
?>
