<?php

$servername = "localhost";

// REPLACE with your Database name
$dbname = "SensorData";
// REPLACE with Database user
$username = "root";
// REPLACE with Database user password
$password = "";

$api_key_value = "tPmAT5Ab3j7F9";

$api_key = $value1 = $value2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = test_input($_POST["api_key"]);
    if($api_key == $api_key_value) {
        $value1 = test_input($_POST["resultado1"]);
        $value2 = test_input($_POST["resultado2"]);
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "INSERT INTO SensorData (resultado1, resultado2)
        VALUES ( '" . $value1 . "', '" . $value2 . "')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    else {
        echo "Wrong API Key provided.";
    }

}
else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}