<!---------------------------------------------------------------------------->
<!--  PHP Example 12F - Array Sorting Methods: -->

<HTML>
<HEAD>
<TITLE>Array Sorting Methods</TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Arrays - Part 6 - Array Sorting Methods</CENTER>

<?php

      echo("<BR>----------- Example 1: sort()  -------------<BR>");

      $INVENTORY1 = array("Master Sword", "Claw Shot", "Bomb Bag", "Digger Mitts", 
                         "Goddess Bow", "Beetle", "Absurdly Sturdy Shield");
        
      echo("<BR>Displaying array BEFORE sort():<BR>");
      
      for( $x = 0;   $x < count($INVENTORY1);  $x++ )
      {
           echo("<BR>Element "  .  $x  .  "  =  "  .  $INVENTORY1[$x] );
      }

      sort($INVENTORY1);

      echo("<BR><BR>Displaying array AFTER sort():<BR>");
      
      for( $x = 0;   $x < count($INVENTORY1);  $x++ )
      {
           echo("<BR>Element "  .  $x  .  "  =  "  .  $INVENTORY1[$x] );
      }
      
      echo("<BR><BR>--------------------------------------------------------------------------------------------------");      
      
      
      
      
      
      
      
      
      
      
      echo("<BR><BR>----------- Example 2: asort()  -------------");

      $INVENTORY2 = array("Weapon1" => "Master Sword", "Weapon2" => "Bomb Bag", 
                          "Weapon3" => "Goddess Bow");
      
      echo("<BR><BR>Displaying array BEFORE asort():<BR>");
      
      while( list($ELEMENT, $VALUE)  =  each($INVENTORY2) )
      {
             echo("<BR>Element "  .  $ELEMENT  .  "  =  "  .  $VALUE );
      }

      asort($INVENTORY2);
      
      echo("<BR><BR>Displaying array AFTER asort():<BR>");

      while( list($ELEMENT, $VALUE)  =  each($INVENTORY2) )
      {
             echo("<BR>Element "  .  $ELEMENT  .  "  =  "  .  $VALUE );
      } 
      
      
      echo("<BR><BR>--------------------------------------------------------------------------------------------------");        

      
      
      
      
      
      
      
      
      
      
      echo("<BR>----------- Example 3: ksort()  -------------<BR><BR>");

      $INVENTORY3 = array("Weapon2" => "Claw Shot", "Weapon3" => "Beetle", 
                         "Weapon1" => "Laser Whip");
      
      echo("Displaying array BEFORE ksort():<BR>");
      
      while( list($ELEMENT, $VALUE)  =  each($INVENTORY3) )
      {
             echo("<BR>Element "  .  $ELEMENT  .  "  =  "  .  $VALUE );
      }

      ksort($INVENTORY3);
      
      echo("<BR><BR>Displaying array AFTER ksort():<BR>");

      while( list($ELEMENT, $VALUE)  =  each($INVENTORY3) )
      {
                 echo("<BR>Element "  .  $ELEMENT  .  "  =  "  .  $VALUE );
      } 
      
      echo("<BR><BR>--------------------------------------------------------------------------------------------------");               
      
      
      
      
      
      
      
      
      
      
      echo("<BR>----------- Example 4: Customizeable Sorts - usort()  -------------");

      function StringLength($STRING1, $STRING2)
      {
               $STRING1_LENGTH = strlen($STRING1);
               $STRING2_LENGTH = strlen($STRING2);

               if($STRING1_LENGTH == $STRING2_LENGTH)
               {    return 0;  }

               return  ($STRING1_LENGTH  <  $STRING2_LENGTH)  ?  -1  :  1;              
      }

      $INVENTORY4 = array("Weapon1" => "Master Sword", "Weapon2" => "Bomb Bag", 
                         "Weapon3" => "Goddess Bow");
        
      echo("<BR><BR>Displaying array BEFORE usort():<BR>");
      
      while( list($ELEMENT, $VALUE)  =  each($INVENTORY4) )
      {
             echo("<BR>Element "  .  $ELEMENT  .  "  =  "  .  $VALUE );
      }

      usort($INVENTORY4, 'StringLength');
              
      echo("<BR><BR>Displaying array AFTER usort():<BR>");
      
      while( list($ELEMENT, $VALUE)  =  each($INVENTORY4) )
      {
             echo("<BR>Element "  .  $ELEMENT  .  "  =  "  .  $VALUE );
      } 

      echo("<BR><BR>--------------------------------------------------------------------------------------------------");               
      
      ?>

</FONT>
</BODY>
</HTML>

