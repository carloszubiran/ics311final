<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/24/17
 * Time: 10:53 PM
 */

$gameID = $_GET["game"];
$newDrawing = $_GET["newDrawing"];

include '../db_connection.php';

include "../header.php";

$sql = "INSERT into Drawing (Game_gameID, drawingDate, drawingNumber)
    VALUES ('$gameID', now(), '$newDrawing');";

if ($conn->query($sql) === TRUE) {
    echo " <h3 class='jumbotron text-center'>  New record created successfully with '$gameID' and Drawing '$newDrawing' </h3>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include "../footer.php";
