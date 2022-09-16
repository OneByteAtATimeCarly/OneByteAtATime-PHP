<HTML>
<HEAD><TITLE>Ponyville Database</TITLE></HEAD>

<BODY text="FFFFFF" bgcolor="000000">
<CENTER>Running a SQL Command: Using the query() Method</CENTER> 
<!--
     Note: The query() method returns a result set that can be stored in an 
     array instead of a simple integer denoting the number of records affected.
-->
    <BR><BR>

<?php
       try
       {
           $pdo = new PDO('mysql:host=localhost; dbname=ponies', 'root','password');
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $pdo->exec('SET NAMES "utf8"');
           echo("<CENTER>Connected to the Ponyville database successfully! <3</CENTER>");
       }
       catch(PDOException $X)
       { 
           echo("<CENTER>Could not connect to the Ponyville database! Reason =<BR><BR>" 
                . "----------------------------------------------------<BR>". 
                   $X->getMessage()
                . "<BR>----------------------------------------------------</CENTER>"); 
           exit();
           $pdo = null; //Disconnect from database
       }
       
       try
       {
           $SQL_String = "SELECT Ability FROM ponies.ponies";
           
           $RESULT = $pdo->query($SQL_String);
           
           $output = "Successfully selected all pony abilities!";
           echo("<BR><BR>" . $output);
           
           //Note: fetch() returns a single element in the collection/result set
           while($row = $RESULT->fetch())
           {
                 $PONY_ABILITIES[] = $row['Ability'];
           }
           
           $AbilityCount = 0;
           
           foreach($PONY_ABILITIES as $ABILITY)
           {
               $AbilityCount++;
               echo("<BR>$AbilityCount. $ABILITY");
           }
           
       }
       catch(PDOException $X)
       {
           $output = "<CENTER>Error could not select all pony abilities: " 
                     . $X->getMessage();
           echo("<BR><BR>" . $output . "</CENTER>");
           exit();
       }      
?>

</BODY>
</HTML>