<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/12/17
 * Time: 11:25 PM
 */

$servername = "localhost";
$username = "root";
$password = "jTX3Y?01iwzk";
$db = "CarlosLottery";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>