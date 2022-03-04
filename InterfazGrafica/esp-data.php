<!DOCTYPE html>
<html><body>
<?php

$servername = "localhost";

// REPLACE with your Database name
$dbname = "SensorData";
// REPLACE with Database user
$username = ""; //Indicar nombre de la base de datos
// REPLACE with Database user password
$password = ""; //Indicar contrasenia de la base de datos

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, resultado1, resultado2, reading_time FROM SensorData ORDER BY id DESC";

echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <td>ID</td>  
        <td>Resultado 1</td> 
        <td>Value 2</td>
        <td>Timestamp</td> 
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_id = $row["id"];
        $row_value1 = $row["resultado1"];
        $row_value2 = $row["resultado2"]; 
        $row_reading_time = $row["reading_time"];
        // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time - 1 hours"));
      
        // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 4 hours"));
      
        echo '<tr> 
                <td>' . $row_id . '</td> 
                <td>' . $row_value1 . '</td> 
                <td>' . $row_value2 . '</td>
                <td>' . $row_reading_time . '</td> 
              </tr>';
    }
    $result->free();
}

$conn->close();
?> 
</table>
</body>
</html>
