<!---------------------------------------------------------------------------->
<!--  PHP Example 8A - Mathematical Operators and Precedence   -->

<HTML>
<HEAD>
<TITLE>Precedence and Mathematical Operators</TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Precedence and Mathematical Operators</CENTER>

<?php

      echo("<BR>------------------Mathematical Operators------------------<BR>");

      $x = 2;
      $y = 2;
      $RESULT = 0;
      
      $RESULT = $x + $y;
      echo("<BR> ADDITION (x+y):     " . $x . " + " . $y . " = " . $RESULT . ".");
      
      $RESULT = $x - $y;
      echo("<BR> SUBTRACTION (x-y):  " . $x . " - " . $y . " = " . $RESULT . ".");
      
      $RESULT = $x * $y;
      echo("<BR> MULTIPLICATION (x*y): " . $x . " * " . $y . " = " . $RESULT . ".");
      
      $RESULT = $x / $y;
      echo("<BR> DIVISION (x/y):     " . $x . " / " . $y . " = " . $RESULT . ".");
      
      $RESULT = $x % $y;
      echo("<BR> MODULUS (x%y):      " . $x . " % " . $y . " = " . $RESULT . ".");

      echo("<BR><BR>Remember: The modulus operator retreives the remainder left over after division.");
      $x = 9;
      $y = 2;
      $RESULT = $x % $y;
      echo("<BR> MODULUS (x%y):  " . $x . " % " . $y . " = " . $RESULT . ".");
      
      echo("<BR><BR>------------------Mathematical Precedence------------------<BR>");
      echo("<BR>Remember that the mathematical operations of multiplication and" . 
           "<BR>division take precedence over addition and subtraction operations." .
           "<BR>Observe the following examples:<BR>");
      
      $x = 4;
      $y = 5;
      $z = 10;
      $RESULT = 0;
      
      $RESULT = $x + $y * $z;
      echo("<BR>The result of (x+y*z)  " . $x . " + " . $y . " * " . $z . " is " . $RESULT . "." .
           "<BR>This is because multiplication (y*z) binds tighter than addition (x+y)." . 
           "<BR>This is another way of saying multiplication takes PRECEDENCE over addition.");
      
      $RESULT = $x - $y / $z;
      echo("<BR><BR>The result of (x-y/z)  " . $x . " - " . $y . " / " . $z . " is " . $RESULT . "." .
           "<BR>This is because division (y/z) binds tighter than subtraction (x-y)." . 
           "<BR>This is another way of saying division takes PRECEDENCE over subtraction.");
      
      echo("<BR><BR>Remember that you can use parentheses to modify the natural precedence" . 
           "<BR>order of variables and their values within an expression. Example:<BR>");
      
      $RESULT = ($x + $y) * $z;
      echo("<BR>The result of [ (x+y)*z ]  (" . $x . " + " . $y . ") * " . $z . " is " . $RESULT . "." .
           "<BR>This is because the parentheses around (x+y) cause their addition to be" . 
           "<BR>performed FIRST before multiplication, altering the natural precedence.");
      
      $RESULT = ($x - $y) / $z;
      echo("<BR><BR>The result of [ (x-y)/z ]  (" . $x . " - " . $y . ") / " . $z . " is " . $RESULT . "." .
           "<BR>This is because the parentheses around (x-y) cause their subtraction to be" . 
           "<BR>performed FIRST before division, altering the natural precedence.");
      
?>
</FONT>
</BODY>
</HTML>

