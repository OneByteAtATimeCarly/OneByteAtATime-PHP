<!---------------------------------------------------------------------------->
<!--  PHP Example 12B - Associative Arrays  -->

<HTML>
<HEAD>
<TITLE>Associative Arrays</TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Arrays - Part 2 - Associative Arrays</CENTER>

<?php

      echo("<BR>----------- Example 1: Associative Arrays -------------<BR>");
      
      //Associative Array
      $PonyAges1['RainbowDash'] = 2;
      $PonyAges1['StarLite'] = 4;
      $PonyAges1['MoonDancer'] = 6;   
      
      echo("<BR>Age of Pony RainbowDash is " . $PonyAges1['RainbowDash'] . ".");
      echo("<BR>Age of Pony StarLite is " . $PonyAges1['StarLite'] . ".");
      echo("<BR>Age of Pony MoonDancer is " . $PonyAges1['MoonDancer'] . ".");

      echo("<BR><BR>----------- Example 2: Associative Arrays with array() method -------------<BR>");    
      
      //Associative Array with array() Method
      $PonyAges2 = array("RainbowDash"=>2, "StarLite"=>4, "MoonDancer"=>6);   
      
      echo("<BR>Age of Pony RainbowDash is " . $PonyAges2['RainbowDash'] . ".");
      echo("<BR>Age of Pony StarLite is " . $PonyAges2['StarLite'] . ".");
      echo("<BR>Age of Pony MoonDancer is " . $PonyAges2['MoonDancer'] . ".");

      echo("<BR><BR>----------------------------------------------------------------");     
           
?>

</FONT>
</BODY>
</HTML>

