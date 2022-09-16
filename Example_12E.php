<!---------------------------------------------------------------------------->
<!--  PHP Example 12E - Array Methods: next(), prev(), current() and key()  -->

<HTML>
<HEAD>
<TITLE>Array Methods: reset(), list() and each() </TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Arrays - Part 5 - Array Methods: next(), prev(), current() and key() </CENTER>

<?php

      echo("<BR>----------- Example 1: Array Methods: current() and key()  -------------<BR>");
      
      $PonyAges1 = array(2,4,3); 
      
      reset($PonyAges1);

      for(  $x = 0;  $x < count($PonyAges1);  $x++  )
      {
            $INDEX  =  key($PonyAges1);
            $VALUE  =  current($PonyAges1);
            echo("<BR>Pony "  .  $INDEX  .  "'s Age = "  .  $VALUE  .  ".");
            next($PonyAges1); 
      }

      echo("<BR><BR>----------- Example 2: Array Methods: next(), prev(), current() and key()  -------------<BR>");
      
      $PonyAges2 = array(2,4,3); 
      
      reset($PonyAges2);

      do
      {
          $INDEX  =  key($PonyAges2);
          $VALUE  =  current($PonyAges2);
          echo("<BR>Pony "  .  $INDEX  .  "'s Age = "  .  $VALUE  .  ".");
      }
      while( next($PonyAges2) );
      
      echo("<BR><BR>--------------------------------------------------------------------------------------------------");      
?>

</FONT>
</BODY>
</HTML>

