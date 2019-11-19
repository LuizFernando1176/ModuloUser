
<?php

// Database configuration
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'teste01';

// Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
} 

// Get search term
$searchTerm = $_GET['q'];

// Get matched data from skills table
$query = $db->query("SELECT id, login FROM user WHERE login LIKE '%".$searchTerm."%'  ORDER BY login ASC");

// Generate skills data array
$skillData = array();
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $skillData[] = $row;
    }
   
}



// Return results as json encoded array
echo json_encode($skillData);
