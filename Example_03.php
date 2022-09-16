<!--  PHP Example 3  - Variable Scope Global vs. Local -->
<!----------------------------------------------------------------------------->

<!--  PHP Example 3A  - Local Scope Variables -->
<!----------------------------------------------------------------------------->
<?php

       echo("<BR><BR>--------------------Example 1: Local Variables-----------------------");
      
   //----------------------------------------------------------------     
       function SomeFunk1()
       {
                $LOCATION = "NORTH2"; 
                $X_COORD = 200;
                $Y_COORD = 250;
                
                echo("<BR>Inside function SomeFunk1():");
                echo("<BR>Value of local LOCATION = "  .  $LOCATION);
                echo("<BR>Value of local X_COORD = "  .  $X_COORD);
                echo("<BR>Value of local Y_COORD = "  .  $Y_COORD);        
       } 
   //----------------------------------------------------------------   

       SomeFunk1(); 
       
       echo("<BR>Outside of any function:");
       echo("<BR>Value of LOCATION = "  .  $LOCATION);
       echo("<BR>--------------------------------------------------------------------------");
?>
<!----------------------------------------------------------------------------->








<!--  PHP Example 3B  - Global Scope Variables -->
<!----------------------------------------------------------------------------->
<?php

       echo("<BR><BR><BR><BR><BR>--------------------Example 2: Global Variables-----------------------");
      
       //Globals - Declared outside of any functions
       $LOCATION = "CENTER1";
       $X_COORD = 10;
       $Y_COORD = 15;
   //----------------------------------------------------------------     
       function SomeFunk2()
       {
                //Globals are imported into a local function like so:
                global $LOCATION, $X_COORD, $Y_COORD;
           
                echo("<BR>Inside function SomeFunk2():");
                echo("<BR>Value of global LOCATION = "  .  $LOCATION);
                echo("<BR>Value of global X_COORD = "  .  $X_COORD);
                echo("<BR>Value of global Y_COORD = "  .  $Y_COORD);
       } 
   //----------------------------------------------------------------   

       SomeFunk2();
       
       echo("<BR>Outside of any function:");
       echo("<BR>Value of global LOCATION = "  .  $LOCATION);
       echo("<BR>--------------------------------------------------------------------------");
?>
<!----------------------------------------------------------------------------->







<!--  PHP Example 3C  - Scope: Local Variables Hiding Global Variables -->
<!----------------------------------------------------------------------------->
<?php

       echo("<BR><BR><BR><BR><BR>--------------Example 3: Hiding Global Variables With Local---------------");
      
       //Globals - Declared outside of any functions
       $LOCATION = "CENTER1";
       $X_COORD = 10;
       $Y_COORD = 15;
   //----------------------------------------------------------------     
       function SomeFunk3()
       {    
                $LOCATION = "NORTH1";
                $X_COORD = 9;
                $Y_COORD = 13;
           
                echo("<BR>Inside function SomeFunk3():");
                echo("<BR>Value of local LOCATION = "  .  $LOCATION);
                echo("<BR>Value of local X_COORD = "  .  $X_COORD);
                echo("<BR>Value of local Y_COORD = "  .  $Y_COORD);
       } 
   //----------------------------------------------------------------   

       SomeFunk3();
       
       echo("<BR><BR>Outside of any function:");
       echo("<BR>Value of global LOCATION = "  .  $LOCATION);
       echo("<BR>Value of global X_COORD = "  .  $X_COORD);
       echo("<BR>Value of global Y_COORD = "  .  $Y_COORD);
       echo("<BR>--------------------------------------------------------------------------");
?>
<!----------------------------------------------------------------------------->






<!--  PHP Example 3D  - Scope: Using the $GLOBALS array -->
<!----------------------------------------------------------------------------->
<!-- The $GLOBALS array is a superglobal - it exists in all scopes. -->
<?php

       echo("<BR><BR><BR><BR><BR>--------------Example 4: Superglobals - Using the \$GLOBALS array ---------------");
      
       //Globals - Declared outside of any functions
       $LOCATION = "CENTER1";
       $X_COORD = 10;
       $Y_COORD = 15;
   //----------------------------------------------------------------     
       function SomeFunk4()
       {    
                $GLOBALS['LOCATION'] = "NORTH1";
                $GLOBALS['X_COORD'] = 9;
                $GLOBALS['Y_COORD'] = 13;
           
                echo("<BR>Inside function SomeFunk4():");
                echo("<BR>Value of \$GLOBALS LOCATION = "  .  $GLOBALS['LOCATION']);
                echo("<BR>Value of \$GLOBALS X_COORD = "  .  $GLOBALS['X_COORD']);
                echo("<BR>Value of \$GLOBALS Y_COORD = "  .  $GLOBALS['Y_COORD']);
       } 
   //----------------------------------------------------------------   

       SomeFunk4();
       
       echo("<BR><BR>Outside of any function:");
       echo("<BR>Value of global LOCATION = "  .  $LOCATION);
       echo("<BR>Value of global X_COORD = "  .  $X_COORD);
       echo("<BR>Value of global Y_COORD = "  .  $Y_COORD);
       echo("<BR>--------------------------------------------------------------------------");
?>
<!----------------------------------------------------------------------------->






<!--  PHP Example 3E  - Scope: Static variables -->
<!----------------------------------------------------------------------------->

<?php

       echo("<BR><BR><BR><BR><BR>--------------Example 5: Using STATIC Variables ---------------");
      
   //----------------------------------------------------------------     
       function SomeFunk5()
       {    
                static $X_COORD = 0;
                static $Y_COORD = 0;
           
                echo("<BR>Inside function SomeFunk5():");
                echo("<BR>Value of static X_COORD = "  .  $X_COORD);
                echo("<BR>Value of static Y_COORD = "  .  $Y_COORD);
                
                $X_COORD += 10;
                $Y_COORD += 10;
       } 
   //----------------------------------------------------------------   

       echo("<BR><BR>Calling SomeFunk5() the 1st time.<BR>");
       SomeFunk5();
       echo("<BR><BR>Now after calling and exiting SomeFunk5():");
       echo("<BR>Value of X_COORD = "  .  $X_COORD);
       echo("<BR>Value of Y_COORD = "  .  $Y_COORD);
       
       echo("<BR><BR>Calling SomeFunk5() the 2nd time.<BR>");
       SomeFunk5();
       echo("<BR><BR>Now after calling and exiting SomeFunk5():");
       echo("<BR>Value of X_COORD = "  .  $X_COORD);
       echo("<BR>Value of Y_COORD = "  .  $Y_COORD);
       
       echo("<BR><BR>Calling SomeFunk5() the 3rd time.<BR>");
       SomeFunk5();
       echo("<BR><BR>Now after calling and exiting SomeFunk5():");
       echo("<BR>Value of X_COORD = "  .  $X_COORD);
       echo("<BR>Value of Y_COORD = "  .  $Y_COORD);
       
       echo("<BR>--------------------------------------------------------------------------");
?>
<!----------------------------------------------------------------------------->