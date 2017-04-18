<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/9/17
 * Time: 3:39 AM
 *
 * This function is to get the name out of the title page,
 * remove the .php extension, remove the underline and replace it
 * with a space, then capitalize the first letter of every word.
 */




function gamesTitles() {

//    remove the .php from the title and store it into $name
    $name = str_ireplace(".php","", basename($_SERVER['PHP_SELF']));
//    replace the underscores with an empty space
    $name = str_ireplace("_", " ", $name);
//    capitalize the first letter
    $name = ucwords($name);
//    print to html



    echo '
    
    <div class="jumbotron">
        <h2 class="text-center">How to play ' . $name .'</h2>
    </div>
   
    
';

}


?>