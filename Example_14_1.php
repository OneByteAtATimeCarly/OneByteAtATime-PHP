<!--  PHP Example 14 - Berkley DB3 Database Access  -->

<?php
      echo("<BR><BR><CENTER>----------");
      echo(" PHP Berkley DB3 Database Access ");
      echo("----------</CENTER><BR><BR>");
      
      $DatabasePath = "ConspiracyData.db";
      $DatabaseType = "db3";
      
//----------------------------------------------------------------------------------- ---------
      function CreateADatabase($DB_Path, $DB_Type)
      {
               echo("<BR>Database Name = $DB_Path");
               echo("<BR>Database Type = $DB_Type");
          
               $DATABASE = dba_open($DB_Path, 'c', $DB_Type);

               if(!$DATABASE) 
               {
                    echo("<BR>Database could not be created."); 
                    return 0;
               }
               else
               {
                    echo("<BR>Database created successfully!"); 
               }

               return $DATABASE;
      }
//--------------------------------------------------------------------------------------------
      function OpenADatabase($DB_Path,  $DB_Type)
      {
               $DB = dba_open($DB_Path,  "r",  $DB_Type);

               if(!$DB) 
               {
                    echo("Database could not be opened."); 
                    return 0;
               }
               else
               {
                    echo("Database opened successfully!"); 
               }

               return $DB;
      }
//--------------------------------------------------------------------------------------------

      //$DB =  OpenADatabase($DatabasePath, $DatabaseType );
      $DATA =  CreateADatabase($DatabasePath, $DatabaseType );
  /*
      if(!$DB) 
      {
           $DB  =  CreateADatabase($DatabasePath, $DatabaseType );
           
           if(!$DB)
           {  exit;  }    
      }
  */
?>
