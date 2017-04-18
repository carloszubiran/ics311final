<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/11/17
 * Time: 8:26 PM
 */

include 'header.php';

echo '

    <div class="jumbotron">
        <h1 class="text-center">Welcome to Carlito\'s Lottery</h1>
    </div>

';

include './db_connection.php';

$sql = "select gameName, drawingDate, drawingNumber from Game, Drawing
        where Game.gameID = Drawing.Game_gameID
        order by drawingDate desc;";
$result = $conn->query($sql);

echo "<div class='col-sm-4'></div>";

if ($result->num_rows > 0) {
    echo "<div class='col-sm-4'><table class='table'><tr><th>Game</th><th>Date</th><th>Drawing</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["gameName"]."</td><td>".$row["drawingDate"]. "</td><td>".$row["drawingNumber"]."</td></tr>";
    }
    echo "</table></div>";
} else {
    echo "0 results";
}
$conn->close();

include 'footer.php';