<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/24/17
 * Time: 5:29 PM
 */

/* get the incoming ID and password hash */
$user = $_GET["userid"];
$pass = ($_GET["password"]);


//
///* establish a connection with the database */
//$server = new mysqli("localhost", "root",
//    "jTX3Y?01iwzk", "CarlosLottery");
//if (!$server) die($server);

include '../db_connection.php';


/* SQL statement to query the database */
$sql = "select username, password from user
        where username = '$user'
        and password = '$pass'";


/* query the database */
$result = $conn->query($sql);

/* Allow access if a matching record was found, else deny access. */

if ($result->num_rows > 0) {
    /* access granted */
    echo "Access Granted: Welcome, $user!";
    session_start();
    header("Cache-control: private");
    $_SESSION["access"] = "granted";
    header("Location: ./admin.php");
    setcookie("access","granted",time()+3600*24*30);
} else {
    /* access denied &#8211; redirect back to login */
    echo "Access Denied: Invalid Credentials.";

    header("Location: ./admin-login.php");

}

$conn->close();


?>
