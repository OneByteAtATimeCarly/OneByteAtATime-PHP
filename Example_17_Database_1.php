<!-- PHP Database Connection 1 - Connecting Using PDO Objects  -->

<?php

//---------------------------------------------------------------------------
    //Globals to persist in memory
    $GlobalDataObject;

    echo("<HTML><HEAD><TITLE>PHP Database Connection Example</TITLE>");
    
    echo("<STYLE>
          BODY,TD 
          {
	      font-family: Comic Sans MS; font-size: 14; COLOR: white; 
              BACKGROUND: black; SCROLLBAR-FACE-COLOR: #000000; 
              SCROLLBAR-HIGHLIGHT-COLOR: #6666CC; SCROLLBAR-SHADOW-COLOR: #6666CC; 
              SCROLLBAR-3DLIGHT-COLOR: #ffffff; SCROLLBAR-ARROW-COLOR: #ffffff;
              SCROLLBAR-TRACK-COLOR: #6666CC; SCROLLBAR-DARKSHADOW-COLOR: #000000;
          }

          A { color:lavender; text-decoration:none; }
          A:hover { color:red; }
          </STYLE>");
    
    echo("</HEAD><BODY>");

    echo("<CENTER>---------------Connect to Ponies!---------------</CENTER>");

    //-----------------Implement Menu Decisions----------------
    ConnectToDatabase();
    if($_POST['MainMenuChoice'] == "1") { CreateTable(); }
    if($_POST['MainMenuChoice'] == "2") { DropTable(); }
    if($_POST['MainMenuChoice'] == "3") { InsertIntoTable1(); }
    if($_POST['MainMenuChoice'] == "4") { InsertIntoTable2(); }
    if($_POST['MainMenuChoice'] == "5") { DeleteFromTable(); }
    if($_POST['MainMenuChoice'] == "6") { UpdateTable(); }
    if($_POST['MainMenuChoice'] == "7") { DisplayTable(); }
    if($_POST['MainMenuChoice'] == "8") { SearchTable(); }
    //----------------------------------------------------------

//---------------------------------------------------------------------------
    function ConnectToDatabase()
    {
             try 
             {
                global $GlobalDataObject;
                
                $GlobalDataObject = new PDO('mysql:host=localhost; dbname=ponies','root','password');    
                $GlobalDataObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $GlobalDataObject->exec('SET NAMES "utf8"');
                echo("<BR> Attempting to connect to pony database...");
                echo("<BR> We have total pony success!! :-)");
                echo("<BR> The ponies are LOCKED and LOADED! :-)");
             } 
             catch(PDOException $ERROR) 
             {
                echo("<BR> We have issues... :-(");
                echo("<BR> Misfire. Ponies are not LOADED. :-(");
                echo("<BR> ERROR = $ERROR->getMessage();");
             }        
    }
  //---------------------------------------------------------------------------  
    function CreateTable() 
    {
             global $GlobalDataObject;
             
             $My_Little_SQL_String = 'CREATE TABLE Princesses 
                     (
                            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            PrincessName TEXT,
                            PrincessBirthday DATE NOT NULL
                     ) 
                     DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
             
             echo("<BR><BR> ---EXPLICIT external function call. Creating TABLE.---");
             
             try
             {
                  $GlobalDataObject->exec($My_Little_SQL_String);
                  echo("<BR> Table CREATED succesfully!");
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR> Table could not be CREATED. :-(");
                   echo("<BR> ERROR = $ERROR->getMessage();");
             }           
    }
 //---------------------------------------------------------------------------
    function DropTable() 
    {
             global $GlobalDataObject;
             
             $My_Little_SQL_String = 'DROP TABLE ponies.Princesses';
             
             echo("<BR><BR> ---EXPLICIT external function call. Dropping TABLE.---");
             
             try
             {
                  $GlobalDataObject->exec($My_Little_SQL_String);
                  echo("<BR> Table DROPPED succesfully!");
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR> Table could not be DROPPED. :-(");
                   echo("<BR> ERROR = $ERROR->getMessage();");
             }           
    }
 //---------------------------------------------------------------------------    
    function InsertIntoTable1() 
    {
             global $GlobalDataObject;
             
             $My_Little_SQL_String = 'INSERT INTO ponies (PonyName, Age, Ability, BirthDay) 
                                      VALUES ("Lemon Sparkle", 9, "Epic Magic", "2004-10-04")';
             
             echo("<BR> Inside INSERT into TABLE function 1.");
             
             //Note: For this we must use PHP's mysql_query function
             
             try
             {
                  $NumberOfRowsUpdated = $GlobalDataObject->exec($My_Little_SQL_String);
                  echo("<BR> Table UPDATED succesfully!");
                  echo("<BR> $NumberOfRowsUpdated rows were updated.");
             } 
             catch(Exception $ERROR) 
             {
                   echo("<BR> Record could NOT be INSERTED. :-(");
                   echo("<BR> ERROR = $ERROR->getMessage();");
             }                
    }
 //--------------------------------------------------------------------------- 
        function InsertIntoTable2() 
    {
             global $GlobalDataObject;
             
             $My_Little_SQL_String = ' INSERT INTO ponies.ponies SET
                                       PonyName = "Lemon Sparkle", 
                                       Age = 9, 
                                       Ability = "Epic Magic", 
                                       BirthDay = "2004-10-04" ';
             
             echo("<BR> Inside INSERT into TABLE function 2.");
             
             //Note: For this we must use PHP's mysql_query function
             
             try
             {
                  $GlobalDataObject->exec($My_Little_SQL_String);
                  echo("<BR> Table UPDATED succesfully!");
                  //echo("<BR> $NumberOfRowsUpdated rows were updated.");
             } 
             catch(Exception $ERROR) 
             {
                   echo("<BR> Record could NOT be INSERTED. :-(");
                   echo("<BR> ERROR = $ERROR->getMessage();");
             }                
    }
 //--------------------------------------------------------------------------- 
    function DeleteFromTable() 
    {
             global $GlobalDataObject;
        
             //Note: Necessary to turn off safe updates to delete records based on non-key value
             $My_Little_SQL_String = ' SET SQL_SAFE_UPDATES=0;
                                       DELETE FROM ponies.ponies WHERE PonyName = "Lemon Sparkle";
                                       ';
             
             try
             {
                  $NumberOfRowsUpdated = $GlobalDataObject->exec($My_Little_SQL_String);
                  echo("<BR> Table record DELETED succesfully!");
                  echo("<BR> $NumberOfRowsUpdated rows were deleted.");
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR> The table record could NOT be DELETED. :-(");
                   echo("<BR> ERROR = $ERROR->getMessage();");
             }                
    }
 //---------------------------------------------------------------------------     
    //Note: The exec command will return the # of affected rows it you provide
    //      a variable to catch the return value.
    function UpdateTable() 
    {
             global $GlobalDataObject;
        
             $My_Little_SQL_String = 'UPDATE ponies SET PonyName="Princess Twilight"
                                      WHERE PonyName LIKE "%Lemon%"';
             
             try
             {
                  $NumberOfRowsUpdated = $GlobalDataObject->exec($My_Little_SQL_String);
                  echo("<BR> Table updated succesfully!");
                  echo("<BR> $NumberOfRowsUpdated rows were updated.");
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR> Table could not be updated. :-(");
                   echo("<BR> ERROR = $ERROR->getMessage();");
             }                
    }
 //--------------------------------------------------------------------------- 
    //Note: The query command returns a PDOStatement object which is a result 
    //      set containing a list of all rows returned from a query. 
    
    function DisplayTable() 
    {
             global $GlobalDataObject;
        
             $My_Little_SQL_String = 'SELECT * FROM ponies.ponies';
             
             try
             {
                  $QueryResult = $GlobalDataObject->query($My_Little_SQL_String);
                  echo("<BR><BR> Attempting to DISPLAY table records...<BR>");
                  
                  echo("<BR><TABLE BORDER=\"3\" WIDTH=\"65%\" ALIGN=\"center\">");
                  
                  echo("<TR style=\"color: #000000; background: white;\">" . 
                       "<TD align=\"center\">#</TD>" . 
                       "<TD align=\"center\">ID</TD>" .
                       "<TD align=\"center\">Name</TD>" . 
                       "<TD align=\"center\">Age</TD>" . 
                       "<TD align=\"center\">Ability</TD>" . 
                       "<TD align=\"center\">Health</TD>" .
                       "<TD align=\"center\">Birthday</TD></TR>");
                  
                  $RowCount = 0;
                  
                  while($ROW = $QueryResult->fetch())
                  {
                       echo("<TR><TD align=\"center\">" . ($RowCount+1) . "</TD>"
                            . "<TD align=\"center\">" . $ROW['id'] . "</TD>"
                            . "<TD align=\"center\">" . $ROW['PonyName'] . "</TD>"
                            . "<TD align=\"center\">" . $ROW['Age'] . "</TD>"
                            . "<TD align=\"center\">" . $ROW['Ability'] . "</TD>"
                            . "<TD align=\"center\">" . $ROW['Health'] . "</TD>"
                            . "<TD align=\"center\">" . $ROW['BirthDay'] . "</TD></TR>");
                       
                       $RowCount++;
                  }
                  echo("</TABLE>");
                  
                  echo("<BR>Total pony occupation strength for world domination = "
                        . $RowCount . ".");
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR> The table could not be DISPLAYED. :-(");
                   echo("<BR> ERROR = $ERROR->getMessage();");
             }              
    }
 //---------------------------------------------------------------------------
    
    function SearchTable() 
    {
             global $GlobalDataObject;
             $My_Little_SQL;
             
             $CHOICE = $_POST['SearchMenuChoice'];
             $SEARCH = $_POST['SearchString'];
             
             echo("<BR> Inside SearchTable function...");
             echo("<BR> Value of CHOICE = $CHOICE");
             echo("<BR> Value of SEARCH = $SEARCH");
        
             $My_Little_SQL = "SELECT * FROM ponies.ponies WHERE $CHOICE LIKE \"%" 
                               . $SEARCH . "%\""; 

             try
             {
                  $QueryResult = $GlobalDataObject->query($My_Little_SQL);
                  echo("<BR><BR> Searching table records...<BR>");
                  
                  echo("<BR><TABLE BORDER=\"3\" WIDTH=\"65%\" ALIGN=\"center\">");
                  
                  echo("<TR style=\"color: #000000; background: white;\">" . 
                       "<TD align=\"center\">#</TD>" . 
                       "<TD align=\"center\">ID</TD>" .
                       "<TD align=\"center\">Name</TD>" . 
                       "<TD align=\"center\">Age</TD>" . 
                       "<TD align=\"center\">Ability</TD>" . 
                       "<TD align=\"center\">Health</TD>" .
                       "<TD align=\"center\">Birthday</TD></TR>");
                  
                  $RowCount = 0;
                  
                  while($ROW = $QueryResult->fetch())
                  {
                       echo("<TR><TD align=\"center\">" . ($RowCount+1) . "</TD>"
                            . "<TD align=\"center\">" . $ROW['id'] . "</TD>"
                            . "<TD align=\"center\">" . $ROW['PonyName'] . "</TD>"
                            . "<TD align=\"center\">" . $ROW['Age'] . "</TD>"
                            . "<TD align=\"center\">" . $ROW['Ability'] . "</TD>"
                            . "<TD align=\"center\">" . $ROW['Health'] . "</TD>"
                            . "<TD align=\"center\">" . $ROW['BirthDay'] . "</TD></TR>");
                       
                       $RowCount++;
                  }
                  echo("</TABLE>");
                  
                  echo("<BR>Total pony occupation strength for world domination = "
                        . $RowCount . ".");
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR> The table could not be DISPLAYED. :-(");
                   echo("<BR> ERROR = $ERROR->getMessage();");
             }                
    }
 //--------------------------------------------------------------------------- 
    //Add HTML footer
    echo("<BR><CENTER>");
    echo("<A HREF=\"Example_17_Database_1_Interface.html\">RETURN</A>");
    echo("</CENTER></BODY></HTML>");
?>
