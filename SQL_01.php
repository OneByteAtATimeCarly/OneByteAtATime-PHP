<HTML>
<HEAD>
    <TITLE>PHP + SQL 1</TITLE>
</HEAD>    

<BODY BGCOLOR="black" TEXT="white">
    
      <FONT FACE="Comic Sans MS" COLOR="red" SIZE="3">
            <CENTER>PHP + SQL 1</CENTER>
      </FONT>

<?php

    //See if MySQL support is configured in PHP
    //phpinfo();

    if($dbc = msql_connect('localhost','user','password'))
    {
        echo("<BR>Success! We were able to connect to MySQL.");
        mysql_close($dbc);
    }
    else
    {
        echo("<BR>Uh oh! We could not connect to MySQL. Sorry.");
    }

?>
    
</BODY>    
</HTML>