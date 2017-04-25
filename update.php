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
        <h1 class="text-center">Welcome to Carlito\'s Lottery</h1>
        <p>This is where you can update a drawing. Please provide your Drawing ID and a update
        number "String" in the format 3-2-4-4-3-2.</p>
    </div>
    
    
    

';

include './db_connection.php';

$sql = "select drawingID from Drawing
        order by drawingID asc;";


$result = $conn->query($sql);

echo "<div class='col-sm-4'></div>
<div class='form-group'>
    <form action='./functions/update-drawing.php' method='get' class='col-sm-4'>
    <select name='game' class='form-control'>";

if ($result->num_rows > 0) {
    echo "<div class='col-sm-4'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo
            "<option value='".$row["drawingID"]."'>" .$row["drawingID"] . "</option>";
    }
    echo "</table></div>";
} else {
    echo "0 results";
}

echo "
        <input type='text' name='updateDrawing' id='updateDrawing' class='form-control'>
        </select>
        <button type='submit' value='submit' class='form-control'>Update</button>
    </form>
    </div>";


$conn->close();


include 'footer.php';