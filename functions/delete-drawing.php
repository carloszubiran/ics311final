<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/24/17
 * Time: 11:27 PM
 */

$deleteDrawing = $_GET["deleteDrawing"];

include '../db_connection.php';

include "../header.php";


$sql = "DELETE FROM Drawing WHERE drawingID = '$deleteDrawing';";

if ($conn->query($sql) === TRUE) {
    echo "<h3 class='jumbotron text-center'>New record deleted successfully
    with gameID '$deleteDrawing'</h3>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include "../footer.php";
