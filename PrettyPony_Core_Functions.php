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
    
    ConnectToDatabase();
    
    echo("<TABLE ALIGN=\"CENTER\" WIDTH=\"90%\">");
    echo("<TH ALIGN=\"center\" COLSPAN=\"3\" STYLE=\"color: pink; font-family: Comic Sans MS; font-size: 30;\">");
    echo("Pony Results!</TH>");
    echo("<TR><TD ALIGN=\"right\"><IMG SRC=\"Fluttershy_8.jpg\" WIDTH=\"150\" HEIGHT=\"260\"></TD>");
    echo("<TD>");

    //-----------------Implement Menu Decisions----------------
    if($_POST['MainMenuChoice'] == "1") { DisplayPonies(); }
    if($_POST['MainMenuChoice'] == "2") { SearchPonies(); }
    if($_POST['MainMenuChoice'] == "3") { AddPonies(); }
    if($_POST['MainMenuChoice'] == "4") { ModifyPonies(); }
    if($_POST['MainMenuChoice'] == "5") { DeletePonies(); }
    if($_POST['MainMenuChoice'] == "6") { CreateTable(); }
    if($_POST['MainMenuChoice'] == "7") { DropTable(); }
    if($_POST['MainMenuChoice'] == "8") { ModifyTable(); }
    if($_POST['MainMenuChoice'] == "9") { DisplaySpecificAttributes1(); }
    if($_POST['MainMenuChoice'] == "10") { DisplaySpecificAttributes2(); }
    //----------------------------------------------------------

//---------------------------------------------------------------------------
    function ConnectToDatabase()
    {
             try 
             {
                global $GlobalDataObject;
                echo("<CENTER> Connecting to pony database   ...  ");
                $GlobalDataObject = new PDO('mysql:host=localhost; dbname=ponies','root','password');    
                $GlobalDataObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $GlobalDataObject->exec('SET NAMES "utf8"');
                echo("  Success!   ...   Ponies are LOCKED and LOADED! :-)</CENTER>");
             } 
             catch(PDOException $ERROR) 
             {
                echo("<BR> We have issues... :-(");
                echo("<BR> Misfire. Ponies are not LOADED. :-(");
                echo("<BR> ERROR = " . $ERROR->getMessage() . ".");
             }        
    }
  //---------------------------------------------------------------------------
    //Note: The query command returns a PDOStatement object which is a result 
    //      set containing a list of all rows returned from a query. 
    
    function DisplayPonies() 
    {
             global $GlobalDataObject;
        
             $My_Little_SQL = 'SELECT * FROM ponies.ponies';
             
             try
             {
                  $QueryResult = $GlobalDataObject->query($My_Little_SQL);
                  
                  echo("<BR><TABLE BORDER=\"3\" WIDTH=\"95%\" ALIGN=\"center\">");
                  
                  echo("<TR style=\"color: #000000; background: white;\">" . 
                       "<TD align=\"center\">#</TD>" . 
                       "<TD align=\"center\">ID</TD>" .
                       "<TD align=\"center\">Name</TD>" . 
                       "<TD align=\"center\">Age</TD>" . 
                       "<TD align=\"center\">Ability</TD>" . 
                       "<TD align=\"center\">Health</TD>" .
                       "<TD align=\"center\">Birthday</TD></TR>");
                  
                  $RowCount = 0;
                  
                  //Note: fetch() returns a single row each time from the result set as we loop through it
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
                  
                  echo("<BR><CENTER>Total pony occupation strength for world domination = "
                        . $RowCount . ".</CENTER>");
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR> The table could not be DISPLAYED. :-(");
                   echo("<BR> ERROR = " . $ERROR->getMessage() . ".");
             }              
    }
 //---------------------------------------------------------------------------
    
    function SearchPonies() 
    {
             global $GlobalDataObject;
             
             $CHOICE = $_POST['SearchMenuChoice'];
             $SEARCH = $_POST['SearchString'];
             
             echo("<CENTER> Searching for \"$SEARCH\" ");
             echo("under the pony attribute \"$CHOICE\".</CENTER>");
        
             $My_Little_SQL = "SELECT * FROM ponies.ponies WHERE $CHOICE LIKE \"%" 
                               . $SEARCH . "%\""; 

             try
             {
                  $QueryResult = $GlobalDataObject->query($My_Little_SQL);
                  
                  echo("<BR><TABLE BORDER=\"3\" WIDTH=\"95%\" ALIGN=\"center\">");
                  
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
                  
                  echo("<BR><CENTER>Total pony occupation strength for world domination = "
                        . $RowCount . ".</CENTER>");
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR> The table could not be DISPLAYED. :-(");
                   echo("<BR> ERROR = " . $ERROR->getMessage() . ".");
             }                
    }
    
 //---------------------------------------------------------------------------    

    function AddPonies() 
    {
             global $GlobalDataObject;
             
             $TheName = $_POST['PonyName'];
             $TheAge = $_POST['Age'];
             $TheAbility = $_POST['Ability'];
             $TheHealth = $_POST['Health'];
             $TheBirthDay = $_POST['BirthDay'];
             
             echo("<TABLE BORDER=\"2\" ALIGN=\"center\" WIDTH=\"75%\" CELLSPACING=\"2\" CELLPADDING=\"20\">");
             echo("<TR><TD>");
             
             echo("Received:<BR>PonyName = $TheName<BR>Age = $TheAge<BR>Ability = $TheAbility"
                         . "<BR>Health = $TheHealth<BR>BirthDay = $TheBirthDay");
             
             $My_Little_SQL = 
             'INSERT INTO ponies.ponies (PonyName, Age, Ability, Health, BirthDay) 
              VALUES ("' . $TheName . '", "'
                         . $TheAge . '", "'
                         . $TheAbility . '", "'
                         . $TheHealth . '", "'
                         . $TheBirthDay . '")';
             
             echo("<BR><BR>The SQL string being applied to this function is: " . $My_Little_SQL);
             
             try
             {
                  $NumberOfRowsUpdated = $GlobalDataObject->exec($My_Little_SQL);
                  echo("<BR><BR>Pony added succesfully!");
                  echo("<BR>$NumberOfRowsUpdated rows were updated.");
             } 
             catch(Exception $ERROR) 
             {
                   echo("<BR>Pony could NOT be INSERTED. :-(");
                   echo("<BR> ERROR = " . $ERROR->getMessage() . ".");
             }
             
             echo("</TD></TR></TABLE>");
    }

 //---------------------------------------------------------------------------    
    
    //Note: The exec command will return the # of affected rows it you provide
    //      a variable to catch the return value.
    function ModifyPonies() 
    {
             global $GlobalDataObject;

             $CHOICE = $_POST['ID'];
             $TheName = $_POST['PonyName'];
             $TheAge = $_POST['Age'];
             $TheAbility = $_POST['Ability'];
             $TheHealth = $_POST['Health'];
             $TheBirthDay = $_POST['BirthDay'];
             
             echo("<CENTER> Attempting to modify pony object # \"$CHOICE\".</CENTER>");
             echo("<TABLE BORDER=\"2\" ALIGN=\"center\" WIDTH=\"75%\" CELLSPACING=\"2\" CELLPADDING=\"20\">");
             echo("<TR><TD>");
             
             echo("Received:<BR>PonyName = $TheName<BR>Age = $TheAge<BR>Ability = $TheAbility"
                         . "<BR>Health = $TheHealth<BR>BirthDay = $TheBirthDay");

             $My_Little_SQL = 
             'UPDATE ponies SET ' . 
             'PonyName="' . $TheName . '",' .
             'Age="' . $TheAge . '",' .
             'Ability="' . $TheAbility . '",' .
             'Health="' . $TheHealth . '",' .
             'BirthDay="' . $TheBirthDay . '" ' .
             'WHERE id LIKE ' . $CHOICE . '';             
             
             echo("<BR><BR>The SQL string being applied to this function is: " . $My_Little_SQL);
             
             try
             {
                  $NumberOfRowsUpdated = $GlobalDataObject->exec($My_Little_SQL);
                  echo("<BR><BR> This pony was modified succesfully!");
                  echo("<BR> $NumberOfRowsUpdated rows were updated.");
                  
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR> The table could not be updated. :-(");
                   echo("<BR> ERROR = " . $ERROR->getMessage() . ".");
             }   
             
             echo("</TD></TR></TABLE>");
    }
         
//---------------------------------------------------------------------------  
    
    function DeletePonies() 
    {
             global $GlobalDataObject;
             
             $CHOICE = $_POST['ID'];
        
             //Note: Necessary to turn off safe updates to delete records based on non-key value
             $My_Little_SQL = 'SET SQL_SAFE_UPDATES=0;
                               DELETE FROM ponies.ponies WHERE id = "' . $CHOICE . '"';
             
             echo("<TABLE BORDER=\"2\" ALIGN=\"center\" WIDTH=\"75%\" CELLSPACING=\"2\" CELLPADDING=\"20\">");
             echo("<TR><TD>");
             
             echo("The SQL string being applied to this function is: " . $My_Little_SQL);
             
             try
             {
                  $NumberOfRowsUpdated = $GlobalDataObject->exec($My_Little_SQL);
                  echo("<BR><BR> Pony was DELETED succesfully!");
                  echo("<BR><BR> $NumberOfRowsUpdated  rows were deleted.");
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR> The table record could NOT be DELETED. :-(");
                   echo("<BR> ERROR = " . $ERROR->getMessage() . ".");
             }                
             
             echo("</TD></TR></TABLE>");
    }
    
 //---------------------------------------------------------------------------
    
    function CreateTable() 
    {
             global $GlobalDataObject;
             
             $TableName = $_POST['TableName'];
             $Field1Name = $_POST['Field1Name'];
             $Field1Type = $_POST['Field1Type'];
             $Field2Name = $_POST['Field2Name'];
             $Field2Type = $_POST['Field2Type'];
             $Field3Name = $_POST['Field3Name'];
             $Field3Type = $_POST['Field3Type'];
             $Field4Name = $_POST['Field4Name'];
             $Field4Type = $_POST['Field4Type'];
             $Field5Name = $_POST['Field5Name'];
             $Field5Type = $_POST['Field5Type'];
             
             $My_Little_SQL = 'CREATE TABLE ' . $TableName . ' 
                              (
                                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, ' .
                                $Field1Name . ' ' . $Field1Type . ', ' .
                                $Field2Name . ' ' . $Field2Type . ', ' .
                                $Field3Name . ' ' . $Field3Type . ', ' .
                                $Field4Name . ' ' . $Field4Type . ', ' .
                                $Field5Name . ' ' . $Field5Type . ' ' . '
                               ) 
                               DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
             
             echo("<TABLE BORDER=\"2\" ALIGN=\"center\" WIDTH=\"75%\" CELLSPACING=\"2\" CELLPADDING=\"20\">");
             echo("<TR><TD>");
             
             echo("The SQL string being applied to this function is:<BR><BR>\"" . $My_Little_SQL . "\"");
             
             try
             {
                  $GlobalDataObject->exec($My_Little_SQL);
                  echo("<BR><BR> Table CREATED succesfully!");
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR><BR> Table could not be CREATED. :-(");
                   echo("<BR> ERROR = " . $ERROR->getMessage() . ".");
             }       
             
             echo("</TD></TR></TABLE>");
    }
 //---------------------------------------------------------------------------
    function DropTable() 
    {
             global $GlobalDataObject;
             $CHOICE = $_POST['TableToDelete'];
             
             $My_Little_SQL = 'DROP TABLE ' . $CHOICE . '';
             
             echo("<TABLE BORDER=\"2\" ALIGN=\"center\" WIDTH=\"75%\" CELLSPACING=\"2\" CELLPADDING=\"20\">");
             echo("<TR><TD>");
             
             echo("The SQL string being applied to this function is:<BR><BR>\"" . $My_Little_SQL . "\"");
             
             try
             {
                  $GlobalDataObject->exec($My_Little_SQL);
                  echo("<BR><BR> Table DROPPED succesfully!");
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR> Table could not be DROPPED. :-(");
                   echo("<BR> ERROR = " . $ERROR->getMessage() . ".");
             }
             
             echo("</TD></TR></TABLE>");
    }

//---------------------------------------------------------------------------    

function ModifyTable()
{
             global $GlobalDataObject;
             
             $TableName = $_POST['TableName'];
             $ColumnName = $_POST['ColumnName'];
             $DataType = $_POST['DataType'];
             $ModifyAction = $_POST['ModifyAction'];
             
             $My_Little_SQL = 'ALTER TABLE ' . $TableName . ' ';
             
             if($ModifyAction == "AddColumn") 
             { $My_Little_SQL = $My_Little_SQL . 'ADD ' . $ColumnName . ' ' . $DataType; }
             if($ModifyAction == "DeleteColumn") 
             { $My_Little_SQL = $My_Little_SQL . 'DROP COLUMN ' . $ColumnName; }
             if($ModifyAction == "ModifyColumnType") 
             { $My_Little_SQL = $My_Little_SQL . ' MODIFY COLUMN ' . $ColumnName . ' ' . $DataType; }

             
             echo("<TABLE BORDER=\"2\" ALIGN=\"center\" WIDTH=\"75%\" CELLSPACING=\"2\" CELLPADDING=\"20\">");
             echo("<TR><TD><BR>");
             
             echo(" Table to Modify = " . $TableName . "<BR>");
             echo(" Column to Modify = " . $ColumnName . "<BR>");
             echo(" Data Type = " . $DataType . "<BR>");
             echo(" Modify Action = " . $ModifyAction . "<BR>");
             
             echo(" The SQL string being applied to this function is:<BR><BR>\"" . $My_Little_SQL . "\"");
             
             try
             {
                  $GlobalDataObject->exec($My_Little_SQL);
                  echo("<BR><BR> Table was modified succesfully!");
             } 
             catch(PDOException $ERROR) 
             {
                   echo("<BR> The table could not be modified. :-(");
                   echo("<BR> ERROR = " . $ERROR->getMessage() . ".");
             }
             
             echo("</TD></TR></TABLE>");         
}
 //--------------------------------------------------------------------------- 

function DisplaySpecificAttributes1()
{
         global $GlobalDataObject;
         $CHOICE = $_POST['AttributeMenuChoice'];
         
         $My_Little_SQL = 'SELECT ' . $CHOICE . ' FROM ponies.ponies';

         echo("<BR>The SQL string being applied to this function is:<BR> \"" . 
              $My_Little_SQL . "\"<BR>");
         
         try
         {
            $QueryResult = $GlobalDataObject->query($My_Little_SQL);

            while($ROW = $QueryResult->fetch())
            {
                  $ATTRIBUTES[] = $ROW[$CHOICE];
            }
            
            $RowCount = 0;         

            //Note: foreach within () takes an array and stores each element in a variable
           foreach($ATTRIBUTES as $AnAttribute)
            {
                 echo("<BLOCKQUOTE><P>[Attribute = $CHOICE]  $AnAttribute </P></BLOCKQUOTE>");
                 $RowCount++;
            }
            
            echo("<BR><CENTER>Total pony Ability entries = " . $RowCount . ".</CENTER>");
         } 
         catch(PDOException $ERROR) 
         {
               echo("<BR> Pony abilities could not be DISPLAYED. :-(");
               echo("<BR><BR> ERROR = " . $ERROR->getMessage() . ".");
         }           
}

 //---------------------------------------------------------------------------

 function DisplaySpecificAttributes2()
  {
          global $GlobalDataObject;
          $CHOICE = $_POST['AttributeMenuChoice'];
         
          $My_Little_SQL = 'SELECT ' . $CHOICE . ' FROM ponies.ponies';

          echo("<BR>The SQL string being applied to this function is:<BR> \"" . 
               $My_Little_SQL . "\"<BR>");
         
         try
         {
            $QueryResult = $GlobalDataObject->query($My_Little_SQL);

            $RowCount = 0;         

           foreach($QueryResult as $ROW)
           {
                echo("<BLOCKQUOTE><P>[Attribute = $CHOICE]  " .
                     $ROW[$CHOICE] . "</P></BLOCKQUOTE>");
                $RowCount++;
           }
            
            echo("<BR><CENTER>Total pony Ability entries = " . $RowCount . ".</CENTER>");
         } 
         catch(PDOException $ERROR) 
         {
               echo("<BR> Pony abilities could not be DISPLAYED. :-(");
               echo("<BR><BR> ERROR = " . $ERROR->getMessage() . ".");
         }                 
  }

 //---------------------------------------------------------------------------
    function InsertIntoTable2() 
    {
       /*       global $GlobalDataObject;
             
             $My_Little_SQL = ' INSERT INTO ponies.ponies SET
                                       PonyName = "Lemon Sparkle", 
                                       Age = 9, 
                                       Ability = "Epic Magic", 
                                       BirthDay = "2004-10-04" ';
             
             echo("<BR> Inside INSERT into TABLE function 2.");
             
             //Note: For this we must use PHP's mysql_query function
             
             try
             {
                  $GlobalDataObject->exec($My_Little_SQL);
                  echo("<BR> Table UPDATED succesfully!");
                  //echo("<BR> $NumberOfRowsUpdated rows were updated.");
             } 
             catch(Exception $ERROR) 
             {
                   echo("<BR> Record could NOT be INSERTED. :-(");
                   echo("<BR> ERROR = $ERROR->getMessage();");
             }  
        */              
    }

 //---------------------------------------------------------------------------
 //
    //Add HTML footer
    echo("<BR><CENTER>");
    echo("<A HREF=\"#\" onClick=\"history.go(-1)\">BACK</A>");
    echo("&nbsp;&nbsp;|&nbsp;&nbsp;");
    echo("<A HREF=\"PrettyPony_Main_Menu.html\">MAIN MENU</A></CENTER>");
    echo("</TD>");
    echo("<TD ALIGN=\"left\"><IMG SRC=\"Fluttershy_12.jpg\" WIDTH=\"150\" HEIGHT=\"260\"></TD>");
    
    echo("</TR></TABLE>");
    echo("<CENTER><IMG SRC=\"Fluttershy_1.jpg\" WIDTH=\"200\" HEIGHT=\"100\"></CENTER>");
    echo("</BODY></HTML>");
?>




<!-- Alternative Example:  TO make a BACK link that shows URLs:
<script>
    document.write('<a href="' + document.referrer + '">Go Back</a>');
</script>
-->