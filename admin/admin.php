<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/24/17
 * Time: 5:12 PM
 */


// todo the page be able to create a game for admin


session_start();
header("Cache-control: private");
if ($_SESSION["access"] != "granted")
    header("Location: ./admin-login");

include 'header.php';

echo '
<h3 class="text-center jumbotron">You are logged in. Feel free to create a game type or logout.</h3>
';


include 'footer.php';
