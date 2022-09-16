<!--  PHP Example 15 - Cookies!  -->

<?php

//----------------------------------------------------------------------------------- ---------

    echo("<HEAD><TITLE>Cookie Fun!</TITLE>");
    
    //1st cookie set for a day, 2nd for an hour
    setcookie("PlayerName", "Link", time() + 86400);
    setcookie("Occupation", "Adventurer", time() + 86400); 
    setcookie("UserName","CGermany", time() + 3600,"/","www.networkingprogramming.com", true, false);
    
    echo("</HEAD>");
    echo("<BODY bgcolor=\"black\" text=\"white\">");
    
    echo("<CENTER>----------");
    echo(" Cookies!");
    echo("----------</CENTER>");    
    
    echo("<BR><BR><BR><BR><FONT FACE = \"Calibri\" COLOR=\"red\">");
    echo("If the client allowed it, 2 cookies were created on it!</FONT><BR>");  
    
    if( IsSet($_COOKIE["PlayerName"]) )
    {
        echo("<BR>Client's name is: " . $_COOKIE["PlayerName"] . ".");
    }
    else
    {      
        echo("<BR>No cookie exists yet with client name data.");
    }
    
    if( IsSet($_COOKIE["Occupation"]) )
    {
        echo("<BR>Client's occupation is: " . $_COOKIE["Occupation"] . ".");
    }
    else
    {      
        echo("<BR>No cookie exists yet with occupation data.");
    }
    
    echo("</BODY>");   
?>
