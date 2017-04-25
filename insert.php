<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/11/17
 * Time: 8:27 PM
 */


include 'header.php';




echo '

    <div class="jumbotron">
        <h1 class="text-center">Insert</h1>
        <p></p>
        <p class="text-center">Want to cheat the system, please do so here.
        This will enter a new drawing. Please select a game and enter some numbers and dashes. Like so.
        1-2-3-4-5-6-7 or whatever.
        </p>
    </div>
    
';


include './db_connection.php';

$sql = "select *from Game
        order by gameId asc;";


$result = $conn->query($sql);

echo "<div class='col-sm-4'></div>
<div class='form-group'>
    <form action='./functions/insert-drawing.php' method='get' class='col-sm-4'>
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
        <input type='text' name='newDrawing' id='newDrawing' class='form-control'>
        </select>
        <button type='submit' value='submit' class='form-control'>Insert</button>
    </form>
    </div>";


$conn->close();



include 'footer.php';