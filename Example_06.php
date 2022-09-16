<!---------------------------------------------------------------------------->
<!--  PHP Example 6A - Processing HTML Forms - Using GET   -->     

<HTML>
<HEAD>  <TITLE>Shugu Chara - New Game</TITLE>  </HEAD>

<BODY bgcolor="black" text="white">
    
<?php
      echo("Using \"GET\" in HTML forms<BR>"); 
      echo("-------------------------------------------------------------<BR><BR>");
?>
    
<CENTER>
    <FONT FACE ="Comic Sans MS" SIZE="5" COLOR="pink">    
    Welcome to Shugu Chara. Start a New Game?  
    </FONT>
</CENTER>

<FORM name="NewGame_ShuguChara"  method="GET"  action="Example_06.php">
    
     <FONT FACE ="BANKGOTHIC MD BT" SIZE="5" COLOR="lavender"> 
     Name:   <INPUT  type="text"  name="CharName" size="60"> 
     <BR>Gender:&nbsp;&nbsp;Female (Amu Hinamori)<INPUT  type="radio"  name="CharGender"  value="FEMALE">
     <BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     Male   (Ikuto + Yoru)  <INPUT  type="radio"  name="CharGender"  value="MALE">      
     <BR><BR>

     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <INPUT TYPE="reset" VALUE="RESET">&nbsp;
     <INPUT TYPE="submit" VALUE="BEGIN"> 
     </FONT>
     
</FORM>

<TABLE>
    <TR>
        <TD>
<FONT FACE ="BernhardFashion BT" SIZE="4" COLOR="pink">
<?php
     echo("<BR>Processed PHP Output:<BR>--------------------------------------------------------------");

     if( isset($_REQUEST[CharName]) ) 
     { echo("\n\t<BR>CharName HAS been SET!"); }
     else
     { echo("\n\t<BR>CharName has NOT been SET!"); }

     echo( "<BR>Character's NAME now set to: $_REQUEST[CharName] ." );   
        
     if( isset($_REQUEST[CharGender]) ) 
     { echo("\n\t<BR>CharGender HAS been SET!"); }
     else
     { echo("\n\t<BR>CharGender has NOT been SET!"); }

     echo( "<BR>Character's GENDER now set to: $_REQUEST[CharGender] ." );
        
     echo("<BR>--------------------------------------------------------------");
?>
</FONT>
</TD>
<TD>
<CENTER><IMG SRC="ShuguChara.jpg" HEIGHT="200" WIDTH="300"></CENTER>
</TD>
</TR>
</TABLE>
</BODY>
</HTML>
