<?php

// Database configuration
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'stockinventory';

// Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// // Get search term
// $searchTerm = $_GET['term'];

// echo $searchTerm;
// Get search term
$searchTerm = $_GET['term'];
// Get matched data from skills table
//$query = $db->query("SELECT * FROM stock WHERE M_name LIKE '".$searchTerm."%' ORDER BY M_name ASC");
$query = $db->query("SELECT * FROM equipments WHERE SUPPLIER_DETAILS LIKE '".$searchTerm."%'  ORDER BY SUPPLIER_DETAILS ASC");

// Generate skills data array
$skillData = array();
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $data['id'] = $row['SLNO'];
        $data['value'] = $row['SUPPLIER_DETAILS'];
        array_push($skillData, $data);
	}
}

// Return results as json encoded array
echo json_encode($skillData);

?>