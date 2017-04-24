<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/8/17
 * Time: 6:35 PM
 */

include 'header.php';

echo '

    <p></p>

    <div class="jumbotron">
        <h1 class="text-center">Welcome to Carlito\'s Lottery</h1>
        
        <p class="text-center ">This is place where you are guaranteed to win and lose.
    Have fun!
    </p>
    </div>
    
    
    
    <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="./images/all.png" alt="all" width="460" height="345">
      </div>

      <div class="item">
        <img src="./images/daily3.png" alt="daily3" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="./images/gopher5.png" alt="gopher" width="460" height="345">
      </div>

      <div class="item">
        <img src="./images/hot.jpeg" alt="hot" width="460" height="345">
      </div>
      
      <div class="item">
        <img src="./images/lucky.jpeg" alt="lucky" width="460" height="345">
      </div>

    <div class="item">
        <img src="./images/mega.png" alt="mega" width="460" height="345">
      </div>

    <div class="item">
        <img src="./images/north.jpeg" alt="north" width="460" height="345">
      </div>

    <div class="item">
        <img src="./images/pb.jpeg" alt="pb" width="460" height="345">
      </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    

';




include 'footer.php';



?>