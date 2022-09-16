<!---------------------------------------------------------------------------->
<!--  PHP Example 12D - Array Methods: reset(), list() and each()  -->

<HTML>
<HEAD>
<TITLE>Array Methods: reset(), list() and each() </TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Arrays - Part 4 - Array Methods: reset(), list() and each() </CENTER>

<?php

      echo("<BR>----------- Example 1: Array Methods: reset(), list() and each()  -------------<BR>");
      
      $PonyNames1[0] = "RainbowDash";
      $PonyNames1[1] = "StarLite";
      $PonyNames1[2] = "MoonDancer";
     
      reset($PonyNames1);

      while( list( $Element,  $Value)  =  each($PonyNames1) )
      {
             echo( "<BR>"  . "Element " .  $Element  .  " = "  .  $Value );
      }

      echo("<BR><BR>----------- Example 2 (inverted): Array Methods: reset(), list() and each()  -------------<BR>");
      
      //$PonyNames[] = array( 1 => "RainbowDash", 2 => "StarLite", 3 => "MoonDancer"); 
      $PonyNames2['RainbowDash'] = 0;
      $PonyNames2['StarLite'] = 1;
      $PonyNames2['Moondancer'] = 3;
     
      reset($PonyNames2);

      while( list( $Element,  $Value)  =  each($PonyNames2) )
      {
             echo( "<BR>"  . "Element " .  $Element  .  " = "  .  $Value );
      }

      echo("<BR><BR>---------------------- Example 3: Same Using array() method ------------------------<BR>");
      
      $PonyNames3 = array(2=>'RainbowDash',4=>'Starlite',6=>'MoonDancer'); 
     
      reset($PonyNames3);

      while( list( $Element,  $Value)  =  each($PonyNames3) )
      {
             echo( "<BR>"  . "Element " .  $Element  .  " = "  .  $Value );
      }

      echo("<BR><BR>--------------------------------------------------------------------------------------------------");      
?>

</FONT>
</BODY>
</HTML>

