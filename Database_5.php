<HTML>
<HEAD><TITLE>Ponyville Database</TITLE></HEAD>

<BODY text="FFFFFF" bgcolor="000000">
<CENTER>Running a SQL Command: Modifying a Record In a Table</CENTER> 
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
           $SQL_String = "UPDATE ponies.ponies SET
                          Ability = \"Telekinesis\"
                          WHERE PonyName LIKE \"Rarity\" ";
           
           //Note: The exec() method returns # of records processed so you
           //can store is in a vairable and use it!
           $Matched = $pdo->exec($SQL_String);
           
           $output = "<BR> $Matched records were found matching \"Rarity\"." .
                     "<BR>Rarity's ability was successfully modified!";
           echo("<BR><BR>" . $output);
       }
       catch(PDOException $X)
       {
           $output = "Error modify ing Rarity's ability: " . $X->getMessage();
           echo("<BR><BR>" . $output);
           exit();
       }      
?>
</CENTER>
</BODY>
</HTML>