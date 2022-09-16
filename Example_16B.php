<!--  PHP Example 16B - PHP Sessions!  -->

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
    
    if( IsSet($_SESSION["PageLoaded"]) )
    {
        $_SESSION["PageLoaded"]++;
        echo("<BR>PageLoaded = " . $_SESSION["PageLoaded"] . " times!" );
    }       
    else    
    {
        echo("<BR>1st time loading page. PageLoaded being initialized to 1.");
        $_SESSION["PageLoaded"] = 1;
    }
    
    echo("</BODY>");   
?>
