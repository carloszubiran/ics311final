<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/25/17
 * Time: 3:21 AM
 */

session_start();
header("Cache-control: private");
if ($_SESSION["access"] != "granted")
    header("Location: ./admin-login");

include 'header.php';


echo '

    <div class="jumbotron">
        <h2 class="text-center">Create a game type. Daily 3, powerball or whatever.</h2>
        <p></p>

    </div>
    
';


echo "<div class='col-sm-4'></div>
<div class='form-group'>
    <form action='func-create-game.php' method='get' class='col-sm-4'>
";


echo "

        <label for='gameName'>Name</label>
        <input type='text' name='gameName' id='gameName' class='form-control'>
        
        <label for='numberOfNumbers'>numberOfNumbers</label>
        <input type='text' name='numberOfNumbers' id='numberOfNumbers' class='form-control'>
        
        <label for='numberOfNumbers'>specialNumbers</label>
        <input type='text' name='specialNumbers' id='specialNumbers' class='form-control'>
        
        <label for='numberOfNumbers'>rangeOfNumbers</label>
        <input type='text' name='rangeOfNumbers' id='rangeOfNumbers' class='form-control'>
        
        <label for='numberOfNumbers'>rangeOfSpecialNumbers</label>
        <input type='text' name='rangeOfSpecialNumbers' id='rangeOfSpecialNumbers' class='form-control'>
        
        <button type='submit' value='submit' class='form-control'>Create a new game type.</button>
    </form>
    </div>";


include 'footer.php';