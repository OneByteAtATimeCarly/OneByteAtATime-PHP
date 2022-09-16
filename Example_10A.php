<!---------------------------------------------------------------------------->
<!--  PHP Example 10A - Repetition Structures (FOR LOOP)  -->

<HTML>
<HEAD>
<TITLE>Repetition Structures</TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Repetition Structures - FOR LOOPS</CENTER>

<?php

      echo("<BR>-----------Repetition Structures (FOR LOOP) ----------------<BR><BR>");
      
      $NumWeapons  =  10;
              
      echo("<SELECT NAME = weapons>");

      for($X = 0;  $X < $NumWeapons ;   $X++)
      {
          echo("<OPTION  VALUE = "  .  $X  .  ">Weapon "  .  $X  .  "</OPTION>");
      } 

      echo("</SELECT>");
      echo("<BR><BR>----------------------------------------------------------------");
?>

</FONT>
</BODY>
</HTML>

