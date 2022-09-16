<!---------------------------------------------------------------------------->
<!--  PHP Example 7A - Processing HTML Forms - Using POST   -->

<HTML>
<HEAD>
<TITLE>New Game</TITLE>
</HEAD>

<BODY bgcolor="black" text="white">
  
<?php
     echo("Using \"POST\" in HTML forms<BR>"); 
     echo("----------------------------------------------<BR><BR>");
?>     
<FONT FACE ="BankGothic MD BT" SIZE="6" COLOR="teal">  
&nbsp;&nbsp;Hatsune Miku Madness
</FONT>

<TABLE>
    <TR>
        <TD>
<FONT FACE ="Franklin Gothic Medium" SIZE="2" COLOR="pink"> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Play a new game?
<FORM name="NewGame"  method="POST"  action="Example_07.php">
    
      Name:&nbsp;&nbsp;<INPUT  type="text"  name="CharName" SIZE="55"> 
      <BR>Gender:&nbsp;&nbsp;Female<INPUT  type="radio"  name="CharGender"  value="FEMALE">
                             Male<INPUT  type="radio"  name="CharGender"  value="MALE">
      <BR>Vocaloid Companion:&nbsp;&nbsp;
      
      <SELECT name="Companion" >
               <OPTION value="Hatsune Miku">Hatsune Miku</OPTION>
               <OPTION value="Luka Megurine">Luka Megurine</OPTION>
               <OPTION value="Kagamine Rin">Kagamine Rin</OPTION>
               <OPTION value="Kagamine Len">Kagamine Len</OPTION>
               <OPTION value="Big Al">Big Al</OPTION>
      </SELECT>
      
      <BR>Pony Assistant:&nbsp;&nbsp;
      <INPUT  type="checkbox"  name="Ponies[]"  value="Rainbow Dash">Rainbow Dash&nbsp;&nbsp;
      <INPUT  type="checkbox"  name="Ponies[]"  value="Starlite">Starlite&nbsp;&nbsp; 
      <INPUT  type="checkbox"  name="Ponies[]"  value="Lemon Sprinkles">Lemon Sprinkles
      <BR>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <INPUT TYPE="reset" VALUE="RESET">&nbsp; 
      <INPUT TYPE="submit" VALUE="BEGIN"> 
    
</FORM>
</FONT>
      </TD>
      <TD>
          <IMG SRC="Hatsune1.jpg" WIDTH="150" HEIGHT="150">
      </TD>
    </TR>
</TABLE>

<?php
       
echo("<BR><BR>--------------------Processed Form Output-------------------------<BR><BR>");

if( $_POST )
{ 
    $CharacterName  = $_POST['CharName'];
    $CharacterGender  =  $_POST['CharGender'];    
    $CharacterCompanion  =  $_POST['Companion'];    
    $CharacterAssistant  =  $_POST['Ponies'];

    echo( "Name:  $CharacterName  <BR>"  .
          "Gender:  $CharacterGender<BR>"   .
          "Companion:  $CharacterCompanion  <BR>"   );

    for(  $x = 0;   $x  <  count($_POST['Ponies'] ) ;   $x++  )
    {
       echo( "Pony assistant " . ($x+1) . " is: " . $CharacterAssistant[$x] . "<BR>" );      
    }
}
else
{
     echo( "This form is not yet complete. Enter all data and submit.<BR>" );   
}
       
echo("<BR>---------------------------------------------------------------------------");

?>

</BODY>
</HTML>

