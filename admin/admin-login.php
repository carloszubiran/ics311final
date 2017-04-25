<?php
/**
 * Created by PhpStorm.
 * User: carloszubiran
 * Date: 4/24/17
 * Time: 5:12 PM
 */

include "header.php";

echo '

    <h1 class="jumbotron text-center">Admin Login</h1>

';
echo '
<div class="col-sm-4"></div>

<div class="form-group col-sm-4">

    <form action="./validate.php" method="get">
      <label for="userid">ID</label>
      <input type="text" name="userid" id="userid" class="form-control"/>
      <br />
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control"/>
      <br />
      <input type="submit" name="submit" value="Submit" class="form-control"/>
    </form>
</div>
';

include "footer.php";
