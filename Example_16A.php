<!--  PHP Example 16A - PHP Sessions!  -->

<?php

//----------------------------------------------------------------------------------- ---------

    echo("<HEAD><TITLE>PHP Session Fun!</TITLE>");

    echo("</HEAD>");
    echo("<BODY bgcolor=\"black\" text=\"white\">");
    
    echo("<CENTER>----------");
    echo(" PHP Sessions!");
    echo("----------</CENTER>");    
    
    //Create the session ID
    session_start();
    
    if( IsSet($_SESSION["ClientName"]) )
    {
        echo("<BR>Client name = " . $_SESSION["ClientName"] . "." );
    }       
    else    
    {
        echo("<BR>Client name has not been set yet. Setting now.");
        $_SESSION["ClientName"] = "Charles Germany";
    }
    
    if( IsSet($_SESSION["Occupation"]) )
    {
        echo("<BR>Client's occupation = " . $_SESSION["Occupation"] . "." );
    }       
    else    
    {
        echo("<BR>Client occupation has not been set yet. Setting now.");
        $_SESSION["Occupation"] = "Adventurer";
    }
    
    echo("</BODY>");  
    
?>
