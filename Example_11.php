<!---------------------------------------------------------------------------->
<!--  PHP Example 12 - Modularizing code With Functions  -->

<HTML>
<HEAD>
<TITLE>Modularizing code With Functions</TITLE>
</HEAD>
<BODY bgcolor="black" text="white">
<FONT FACE="Comic Sans MS" SIZE="4" COLOR="white">

<CENTER>Functions</CENTER>

<?php

      echo("<BR>----------- Modularizing code With Functions -------------<BR><BR>");
     
//Globals
$MyName = "Charles Germany";
$MyAge = 42;
      
//1. Function Definitions      
//--------------------------------------------------------------
      function DoStuff1()
      {
               echo("\n<BR>Inside of DoStuff1!<BR>\n<BR>");
      } 
//--------------------------------------------------------------
      function DoStuff2($Name)
      {
               echo("\n<BR>Inside of DoStuff2!\n");
               echo("<BR>Hello $Name!<BR>");
      }
//--------------------------------------------------------------      
      function DoStuff3($Name, $Age)
      {
               echo("\n<BR>Inside of DoStuff3!\n");
               echo("<BR>Hello $Name!<BR>");
               echo("You are $Age years old."); 
      }
      
 //Calling (invoking) Functions     
 //--------------------------------------------------------------
       
      echo("<BR>Calling DoStuff1:");
      DoStuff1();
      
      echo("<BR>Calling DoStuff2:");
      DoStuff2($MyName);
      
      echo("<BR>Calling DoStuff3:");
      DoStuff3($MyName,$MyAge);
      
      echo("<BR><BR>----------------------------------------------------------------");
?>

</FONT>
</BODY>
</HTML>

