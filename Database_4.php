<HTML>
<HEAD><TITLE>Ponyville Database</TITLE></HEAD>

<BODY text="FFFFFF" bgcolor="000000">
<CENTER>Running a SQL Command: Inserting a Record Into a Table (Method 2)</CENTER> 
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
                   $X->getMessage()
                . "<BR>----------------------------------------------------"); 
           exit();
           $pdo = null; //Disconnect from database
       }
       
       try
       {
           $SQL_String = "INSERT INTO ponies SET
                          PonyName = \"Rainbow Dash\",
                          Age = 10,
                          Ability = \"Weather Control, Lightning, Tornado, SonicRainboom\",
                          BirthDay = \"2004-08-07\"";
           
           $pdo->exec($SQL_String);
           
           $output = "Rainbow Dash successfully inserted!";
           echo("<BR><BR>" . $output);
       }
       catch(PDOException $X)
       {
           $output = "Error inserting Rainbow Dash: " . $X->getMessage();
           echo("<BR><BR>" . $output);
           exit();
       }      
?>
</CENTER>
</BODY>
</HTML>