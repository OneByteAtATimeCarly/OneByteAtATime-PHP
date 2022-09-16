<!---------------------------------------------------------------------------->
<!--  PHP Example 9B - Decision Structures  Switch Statements -->

<HTML>
<HEAD>
<TITLE>Decision Structures B</TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Decision Structures</CENTER>

<?php

      echo("<BR>------------------Decision Structures------------------<BR>");
      echo("<BR>Switch Statements<BR>");
      echo("<BR>-----------------------------------------------------------");
      
      $MY_SCORE = 1;
      echo("<BR>SCORE = 1.");
      
      switch($MY_SCORE)
      {
             case  1 : echo("<BR>Sorry. Try again.");  break;
             case  2 : echo("<BR>Getting warmer.");  break;
             case  3 : echo("<BR>Acceptable.");  break;
             default : echo("<BR>Invalid response.");  break; 
      }
      
      echo("<BR>-----------------------------------------------------------");
      
      $MY_SCORE = 2;
      echo("<BR>SCORE = 2.");
      
      switch($MY_SCORE)
      {
             case  1 : echo("<BR>Sorry. Try again.");  break;
             case  2 : echo("<BR>Getting warmer.");  break;
             case  3 : echo("<BR>Acceptable.");  break;
             default : echo("<BR>Invalid response.");  break; 
      }
      
      echo("<BR>-----------------------------------------------------------");  
      
      $MY_SCORE = 3;
      echo("<BR>SCORE = 3.");
      
      switch($MY_SCORE)
      {
             case  1 : echo("<BR>Sorry. Try again.");  break;
             case  2 : echo("<BR>Getting warmer.");  break;
             case  3 : echo("<BR>Acceptable.");  break;
             default : echo("<BR>Invalid response.");  break; 
      }
      
      echo("<BR>-----------------------------------------------------------");      
      
?>

</FONT>
</BODY>
</HTML>

