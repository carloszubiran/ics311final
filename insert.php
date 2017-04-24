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
        <p class="text-center">Want to cheat the system, please do so here. </p>
    </div>
    
';


include './db_connection.php';

$sql = "select *from Game
        order by gameId asc;";


$result = $conn->query($sql);

echo "<div class='col-sm-4'></div>
    <form action='insert.php' method='post'>
    <select name='game'>";

if ($result->num_rows > 0) {
    echo "<div class='col-sm-4'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo
            "<option value='".$row["gameId"]."'>" .$row[gameName] . "</option>";
    }
    echo "</table></div>";
} else {
    echo "0 results";
}

echo "
    <input type='text' name='newDrawing'>
    </select>
    </form>";


$conn->close();


include 'footer.php';