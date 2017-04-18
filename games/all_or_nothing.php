<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/9/17
 * Time: 3:19 AM
 */

include 'header.php';

include '../functions/beautifyGamesTitles.php';

gamesTitles();

echo "

<div class='col-sm-4'></div>

<div class='col-xs-5'>

    <p class='text-center'>
        <h1> How to Play</h1>
        Match all the numbers: you win $100,000! Match none of the numbers: you win $100,000! There are even prizes for matching some of the numbers. Two drawings a day means more chances to win.
        
        
        The Basics

    
    
    <h1>The Basics</h1> 
        Leave it all up to luck and ask for an All or Nothing quick pick. Or choose your own numbers. Pick 12 numbers from 1–24. Play slips are available at lottery retailers.
        
        Win prizes by matching 0, 1, 2, 3, 4, 8, 9, 10, 11 or 12 numbers.
        
        Your ticket could be worth up to $100,000—sign the back right away!
    
    </p>

</div>

";


include '../footer.php';