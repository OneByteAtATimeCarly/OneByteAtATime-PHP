<HTML>
<HEAD><TITLE>Ponyville Database</TITLE></HEAD>

<BODY text="FFFFFF" bgcolor="000000">
<CENTER>Running a SQL Command: Creating a Table</CENTER> 
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
           $SQL_String = "CREATE TABLE Horses 
                         (
                            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            HorseName TEXT,
                            HorseAge INT,
                            HorseAbililty TEXT,
                            HorseBirthday DATE NOT NULL
                         ) 
                         DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";
           
           $pdo->exec($SQL_String);
           
           $output = "Horses table successfully created.";
           echo("<BR><BR>" . $output);
       }
       catch(PDOException $X)
       {
           $output = "Error creating Horses table: " . $X->getMessage();
           echo("<BR><BR>" . $output);
           exit();
       }      
?>
</CENTER>
</BODY>
</HTML>