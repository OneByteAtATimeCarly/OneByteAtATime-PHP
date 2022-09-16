<!---------------------------------------------------------------------------->
<!--  PHP Example 10C - Repetition Structures (DO WHILE LOOP)  -->

<HTML>
<HEAD>
<TITLE>Repetition Structures</TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Repetition Structures - Do WHILE LOOPS</CENTER>

<?php

      echo("<BR>-----------Repetition Structures (Do WHILE LOOP) -------------<BR><BR>");
      
      $NumWeapons  =  10;
      $WeaponCount  =  1;
              
      echo("<TABLE BORDER=\"2\">");
      echo("<TR>");

      do
      {
          if($WeaponCount == 3 || $WeaponCount == 5 || $WeaponCount == 7 || $WeaponCount == 9) 
          {  echo("</TR><TR>");  }

          echo("<TD  ALIGN = center > Weapon "  .  $WeaponCount  .  "</TD>");

          $WeaponCount++;
      }      
      while( $WeaponCount  <= $NumWeapons  );

      echo("</TR>");
      echo("</TABLE>");

      echo("<BR><BR>----------------------------------------------------------------");
?>

</FONT>
</BODY>
</HTML>

