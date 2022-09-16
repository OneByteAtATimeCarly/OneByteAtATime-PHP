<!---------------------------------------------------------------------------->
<!--  PHP Example 10B - Repetition Structures (WHILE LOOP)  -->

<HTML>
<HEAD>
<TITLE>Repetition Structures</TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Repetition Structures - WHILE TRUE LOOPS</CENTER>

<?php

      echo("<BR>-----------Repetition Structures (WHILE LOOP) ----------------<BR><BR>");
      
      $NumWeapons  =  10;
      $WeaponCount  =  1;
              
      echo("<TABLE BORDER=\"2\">");
      echo("<TR>");

      while( $WeaponCount  <= $NumWeapons  )
      {
           if($WeaponCount == ($NumWeapons/2) + 1) 
           {  echo("</TR><TR>");  }

           echo("<TD  ALIGN = center > Weapon "  .  $WeaponCount  .  "</TD>");

           $WeaponCount++;
      } 

      echo("</TR>");
      echo("</TABLE>");

      echo("<BR><BR>-----------------------------------------------------------------");
?>

</FONT>
</BODY>
</HTML>

