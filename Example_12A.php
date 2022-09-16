<!---------------------------------------------------------------------------->
<!--  PHP Example 12A - Simple Arrays  -->

<HTML>
<HEAD>
<TITLE>Arrays - Part 1 - Simple Arrays</TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Arrays - Part 1 - Simple Arrays</CENTER>

<?php

      echo("<BR>----------- Example 1: Declaring and Accessing Arrays -------------<BR>");
      
      //Array of Strings
      $PonyNames[0] = "RainbowDash";
      $PonyNames[1] = "StarLite";
      $PonyNames[2] = "MoonDancer";
      
      //Array of integers
      $PonyAges[0] = 2;
      $PonyAges[1] = 4;
      $PonyAges[2] = 6;
      
      for($X = 0; $X < 3; $X++)
      { 
          echo("<BR>Name of Pony " . ($X+1) . " is " . $PonyNames[$X] . ".");
          echo("<BR>Age of Pony " . ($X+1) . " is " . $PonyAges[$X] . ".");
      }
     
      echo("<BR><BR>------- Example 2: Declaring and Accessing Arrays with array() method-------<BR>");
      
      $GirlsTeam = array("Ginger","Stacy","Jennifer","Alicia"); 
      
      for($Y = 0; $Y < 4; $Y++)
      { 
          echo("<BR>Girl's Team Member " . ($Y+1) . " is " . $GirlsTeam[$Y] . ".");
      }      
      
      echo("<BR><BR>------- Example 3: Using the array count() method in a loop -------<BR>");
      
      $BoysTeam = array("Joe","Al","John","Jake"); 
      
      for($Z = 0; $Z < count($BoysTeam); $Z++)
      { 
           echo("<BR>Boy's Team Member " . ($Z+1) . " is " . $BoysTeam[$Z] . ".");
      }      
      
      echo("<BR><BR>----------------------------------------------------------------");      
?>

</FONT>
</BODY>
</HTML>

