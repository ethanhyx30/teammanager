<?php
//Declare variables indicating my server and database name as well as the username and password
$servername = "localhost";
$dbname = "teammanager";
$username = "root";
$password = "";

//Connect to the given database and return a 'success' message if connected successfully
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection Successful";
}
//If an error occurs, return an error message as well as the type of error
catch(PDOException $e){
    echo "Connection Failed: ". $e->getMessage();
}
?>