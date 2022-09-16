<!--  PHP Example 13 - Include Files  -->

<?php
      echo("<BR><BR><CENTER>----------");
      echo(" Using Include Files With require() and include() ");
      echo("----------</CENTER><BR><BR>");
      
      //Example 1:  
      include("Test1.php");
      
      //Example 2:
      require("Test2.php");

      //Example 3: Dynamically including external files of code within a PHP application
      for($X = 1;  $X < 4;  $X++)
      { 
          include("FILE"  .  $X  .  ".php");
      }
?>
