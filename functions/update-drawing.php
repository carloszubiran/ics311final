<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/24/17
 * Time: 11:27 PM
 */

$gameID = $_GET["game"];
$updateDrawing = $_GET["updateDrawing"];

include '../db_connection.php';

include "../header.php";


$sql = "UPDATE Drawing SET drawingNumber = '$updateDrawing' WHERE drawingID = '$gameID';";

if ($conn->query($sql) === TRUE) {
    echo "<h3 class='jumbotron text-center'>New record updated successfully
    with gameID '$gameID' and Drawing '$updateDrawing' </h3>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include "../footer.php";

