<!---------------------------------------------------------------------------->
<!--  PHP Example 12C - Multidimensional Arrays  -->

<HTML>
<HEAD>
<TITLE>Multidimensional Arrays</TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Arrays - Part 3 - Multidimensional Arrays</CENTER>

<?php

      echo("<BR>----------- Example 1: Multidimensional Arrays -------------<BR>");
      
      //Multidimensional Array
      $PonyDetails = array
      (
           array
           (
               "Name = RainbowDash",
               "Type = Pegasus",
               "Standard Ability = Flight",
               "Special ABility = Weather Control"
           ),
          
           array
           (
               "Name = Starlite",
               "Type = Unicorn",
               "Standard Ability = Speed and Stealth",
               "Special ABility = Magic"
           ),
          
           array
           (
               "Name = LemonSprinkles",
               "Type = Hybrid",
               "Standard Ability = Speed,Stealth,Flight",
               "Special ABility = Magic,Weather Control"
           )
      ); 
      
      for($X = 0; $X < count($PonyDetails); $X++)
      {
          echo("<BR><BR>Pony " . ($X+1) . ":");
          echo("<BR>" . $PonyDetails[$X][0]);
          echo("<BR>" . $PonyDetails[$X][1]);
          echo("<BR>" . $PonyDetails[$X][2]);
          echo("<BR>" . $PonyDetails[$X][3]);
      }
      
      echo("<BR><BR>----------- Example 2: Multidimensional Arrays - Chess Board-------------<BR>");
      
      $ChessBoard = array 
      (
           array("ROOK", "KNGT", "BISH", "QUEN", "KING", "BISH", "KNGT", "ROOK"),
           array("PWN", "PWN", "PWN", "PWN", "PWN", "PWN", "PWN", "PWN"),
           array("&nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"),
           array("&nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"),
           array("&nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"),
           array("&nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"," &nbsp;"),
           array("PWN", "PWN", "PWN", "PWN", "PWN", "PWN", "PWN", "PWN"),
           array("ROOK", "KNGT", "BISH", "QUEN", "KING", "BISH", "KNGT", "ROOK")
      );
     
      echo("<BR>Displaying Multidimensional array for ChessBoard values: ");
      
      for($ROWS = 0; $ROWS < 8; $ROWS++)
      {
           for($COLUMNS = 0; $COLUMNS < 8; $COLUMNS++)
           {
                echo("<BR>The chess piece at board position [$ROWS][$COLUMNS] is: " . $ChessBoard[$ROWS][$COLUMNS]);          
           }
      }
      
      echo("<BR><BR>----------------------------------------------------------------");        
      
?>

</FONT>
</BODY>
</HTML>

