<HTML>
<HEAD><TITLE>Ponyville Database</TITLE></HEAD>

<BODY text="FFFFFF" bgcolor="000000">
<CENTER>Connecting to a SQL Database</CENTER>    
    <BR><BR>
<CENTER>
<?php
       try
       {
           $pdo = new PDO('mysql:host=localhost; dbname=ponies', 'root','password');
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $pdo->exec('SET NAMES "utf8"');
           echo("\n\tConnected to the Ponyville database successfully! <3");
       }
       catch(PDOException $X)
       { 
           echo("<BR>Could not connect to the Ponyville database! Reason =<BR><BR>" 
                . "----------------------------------------------------<BR>". 
                   $X
                . "<BR>----------------------------------------------------"); 
           //Note: Careful! This will display password and acct in error message
           //See Example Database_2 for a more ecure method using getMessage.
       }
?>
</CENTER>
</BODY>
</HTML>