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
            For big prizes, Daily 3 tips the odds more in your favor. With eight different ways to play, you can win by matching one, two or all three numbers. Bet as little as 50 cents or as much as $5.
            
    <h1>The Basics</h1> 
            Leave it all up to luck and ask for a Daily 3 quick pick. You’ll get our most popular bet type, Straight-Box, with three randomly selected numbers. Your ticket will cost $1 (50 cents is bet “straight” and 50 cents is bet “box”) unless you specify a bet amount.
            
            Or choose your own number(s), bet type and bet amount. Play slips are available at lottery retailers. Note: play slips include the two most common bet amounts, 50 cents and $1. If you wish to bet more (up to $5), ask the sales associate to manually key in your number(s), bet type and bet amount.
            
            There are eight different bet-types. The bet-type that you choose will appear on your ticket:
            
            First Digit: Pick one number. To win, match the first number drawn.
            Front Pair: Pick two numbers. To win, match the first two numbers drawn in the exact order.
            Back Pair: Pick two numbers. To win, match the last two numbers drawn in the exact order.
            Straight: Pick three numbers. To win, match all three numbers drawn in the exact order.
            3-Way Box: Pick three numbers, 2 that are the same. To win, match all three numbers drawn in any order.
            6-Way Box: Pick three different numbers. To win, match all three numbers drawn in any order.
            Straight/3-Way Box: Pick three numbers, two that are the same. To win $330*, match all three numbers drawn in the exact order. To win $80*, match all three numbers drawn in any order.
            Straight/6-Way Box: Pick three different numbers. To win $290*, match all three numbers drawn in the exact order. To win $40* match all three numbers drawn in any order.
            * Based on $1 bet.
    
    </p>

</div>

";


include '../footer.php';