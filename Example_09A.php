<!---------------------------------------------------------------------------->
<!--  PHP Example 9A - Decision Structures  If and Else BLOCKS -->

<HTML>
<HEAD>
<TITLE>Decision Structures A</TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Decision Structures</CENTER>

<?php

      echo("<BR>------------------Decision Structures------------------<BR>");
      echo("<BR>If and Else BLOCKS<BR>");

      $x = 5;
      echo("<BR>-----------------------------------------------------------");
      echo("<BR>HERE x = 5");
      
      if($x == 5)
      {
          echo("<BR> It's TRUE, the value of x is 5.");
      }
      else
      {
          echo("<BR> It's NOT true, the value of x is NOT 5.");
      }
      
      $x = 10;
      echo("<BR>-----------------------------------------------------------");
      echo("<BR>HERE x = 10");
      
      if($x == 5)
      {
          echo("<BR> It's TRUE, the value of x is 5.");
      }
      else
      {
          echo("<BR> It's NOT true, the value of x is NOT 5.");
      }      
      echo("<BR>-----------------------------------------------------------");
      
?>

<?php
     
      $IQ = 150;
      $SHOE_SIZE = 12;  
      
      echo("<BR><BR>");
      echo("<BR>-----------------------------------------------------------");
      echo("<BR>IQ = 150.      SHOE_SIZE = 12.");
      echo("<BR>-----------------------------------------------------------");
      
      if($IQ <= $SHOE_SIZE)
      {
         echo("<BR>Learn a new trick!") ; 
      }
      else
      {
         echo("<BR>Lighten up. Live a little.");
      }
      
      echo("<BR>-----------------------------------------------------------");
      
      $IQ = 12;
      $SHOE_SIZE = 150; 
      
      echo("<BR>IQ = 12.      SHOE_SIZE = 150.");
      echo("<BR>-----------------------------------------------------------");
      
      if($IQ <= $SHOE_SIZE)
      {
         echo("<BR>Learn a new trick!") ; 
      }
      else
      {
         echo("<BR>Lighten up. Live a little.");
      }
      
      echo("<BR>-----------------------------------------------------------");
?>

</FONT>
</BODY>
</HTML>

