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
        <p class="text-center">Here you can select a game and pick a date for winners!</p>
    </div>

';

include './db_connection.php';

$sql = "select * from Game
        order by gameId asc;";


$result = $conn->query($sql);

echo "<div class='col-sm-4'></div>
<div class='form-group'>
    <form action='./functions/select-drawing-by-date-and-game.php' method='get' class='col-sm-4'>
    <select name='game' class='form-control'>";

if ($result->num_rows > 0) {
    echo "<div class='col-sm-4'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo
            "<option value='".$row["gameID"]."'>" .$row["gameName"] . "</option>";
    }
    echo "</table></div>";
} else {
    echo "0 results";
}


echo "

        </select>
        <input type='text' id='datepicker' class='form-control' name='date'>
        <button type='submit' value='submit' class='form-control'>Select</button>
    </form>
    </div>";


$conn->close();

include 'footer.php';