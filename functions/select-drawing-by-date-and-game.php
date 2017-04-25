<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/24/17
 * Time: 10:53 PM
 */

include "../header.php";

$gameID = $_GET["game"];
$date = date("Y-m-d", strtotime($_GET["date"]));

include '../db_connection.php';

$dateBegin = date('Y-m-d H:i:s', strtotime($date));
$dateEnd = date('Y-m-d 23:59:59', strtotime($date));

echo "<h3 class='jumbotron text-center'>Here are your winners for your date and game.</h3>";


$sql = "select gameID, gameName, drawingDate, drawingNumber from Game, Drawing
        where Game.gameID = Drawing.Game_gameID
        and gameID = '$gameID'
        and drawingDate BETWEEN '$dateBegin' and '$dateEnd'
        order by drawingDate desc;";
$result = $conn->query($sql);

echo "<div class='col-sm-4'></div>";

if ($result->num_rows > 0) {
    echo "<div class='col-sm-4'><table class='table'><tr><th>Game</th><th>Date</th><th>Drawing</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".
            $row["gameName"].
            "</td><td>".
            $row["drawingDate"].
            "</td><td>".
            $row["drawingNumber"].
            "</td></tr>";
    }
    echo "</table></div>";
} else {
    echo "0 results";
}
$conn->close();

include "../footer.php";


