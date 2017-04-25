<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/25/17
 * Time: 3:31 AM
 */

session_start();
header("Cache-control: private");
if ($_SESSION["access"] != "granted")
    header("Location: ./admin-login");


$gameName = $_GET["gameName"];
$numberOfNumbers = $_GET["numberOfNumbers"];
$specialNumbers = $_GET["specialNumbers"];
$rangeOfNumbers = $_GET["rangeOfNumbers"];
$rangeOfSpecialNumbers = $_GET["rangeOfSpecialNumbers"];

include '../db_connection.php';

include "header.php";

$sql = "INSERT into Game (gameName)
        VALUES ('$gameName')";

$result = $conn->query($sql);

$gameID = "Select gameID from Game
        where gameName = '$gameName'";

$gameID = $conn->query($gameID);

$gameID = $gameID->fetch_assoc();

$gameID = $gameID["gameID"];

$sql = "INSERT into Game_Settings (gameID, numberOfNumbers, specialNumbers, rangeOfNumbers, rangeOfSpecialNumbers)
        VALUES ('$gameID', '$numberOfNumbers', '$specialNumbers', '$rangeOfNumbers', '$rangeOfSpecialNumbers')";

$result = $conn->query($sql);

echo "<h3 class='jumbotron text-center'>Game created with gameID '$gameID' </h3>";

$conn->close();

include "footer.php";