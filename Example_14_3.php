<!--  PHP Example 14 - File Access  -->

<?php
      echo("<CENTER>----------");
      echo(" PHP File Access - Locking a file");
      echo("----------</CENTER>");

//----------------------------------------------------------------------------------- ---------

      echo("<BR><BR><BR><BR><FONT FACE = \"Calibri\" COLOR=\"red\">");
      echo("Attempting to create and lock a file: LinkData.txt.</FONT>");  
      
      $FileVariable = fopen("LinkData.txt","w+");

      if(flock($FileVariable, LOCK_EX))
      {
           echo("<BR>File lock established successfully!");
           fwrite($FileVariable, "Curioser and curioser said Alice...");
           flock($FileVariable, LOCK_UN);
      }
      else
      {
           echo("<BR>Error locking file!");
      }

      fclose($FileVariable);      
      
?>
