<HTML>
<HEAD><TITLE>Ponyville Database</TITLE></HEAD>

<BODY text="FFFFFF" bgcolor="000000">
<CENTER>Running a SQL Command: Deleting a Record from a Table</CENTER> 
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
           $SQL_String = "DELETE FROM ponies.ponies
                          WHERE PonyName LIKE \"Twilight Sparkle\" ";
           
           $pdo->exec($SQL_String);
           
           $output = "Twilight Sparkle successfully deleted!";
           echo("<BR><BR>" . $output);
       }
       catch(PDOException $X)
       {
           $output = "Error could not delete Twilight Sparkle: " . $X->getMessage();
           echo("<BR><BR>" . $output);
           exit();
       }      
?>
</CENTER>
</BODY>
</HTML>