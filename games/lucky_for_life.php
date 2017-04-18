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
        
        Select five numbers from 1 to 48 and one Lucky Ball number from 1 to 18, or choose a Quick Pick. Tickets are $2 per play and you can play up to 10 plays per ticket; the play slip can be used for up to five plays and tickets cannot be canceled. Fourteen advance draws are available. Drawings are Mondays & Thursdays at approximately 9:38 p.m. Play slips are available at lottery retailers.

        Match all five numbers and the Lucky Ball to win $1,000/day for life; match the first five numbers to win $25,000/year for life. Minimum guaranteed payout is 20 years.
        
        Your ticket could be worth millions—sign the back right away!
    
    </p>

</div>

";


include '../footer.php';