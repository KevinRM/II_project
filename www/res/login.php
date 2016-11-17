<?php
$servername = "localhost"
$username = "root";
$dbname = "diary_db";

// Create connection
if(!($id = mysql_connect($servername, $username, ""))) { 
    die("Error: Could not connect");
}

// Select DB 
if(!mysql_select_db(dbname, $id)) {
    die("Error: DB does not exist");
}

// SQL query
$sql = "SELECT *".
       "FROM USERS";

// Execute the query
$result = mysql_query($sql, $id);

if (!$result) {
    die("Error: Could not execute the query");
} 

while ($row = mysql_fecth_array("$result")) {
    echo $row['Name'] + 
    $row['Password'] + 
    $row['Lastname'] + 
    $row['Username'] + 
    $row['Birthday'];
}

// Set free result's memory
mysql_free_result($result);
  
// Close connection 
mysql_close($id); 
?>