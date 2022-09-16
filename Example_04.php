<!--  PHP Example 4  - Variables  -->
<!----------------------------------------------------------------------------->

<!--  PHP Example 4A  - Type Casting  -->
<?php
       echo("<BR><BR>--------------------Example 1: Local Variables-----------------------");
       
       $X = 12.34563;
       $Y = 45.78976;
       
       if( (int) $X   >  (int) $Y )
       {  
           $RESULT = (int) $X;
           echo("<BR>X with a value of $RESULT is GREATER!");
       }
       else
       {
           $RESULT = (int) $Y;
           echo("<BR>Y with a value of $RESULT is GREATER!");
       }
       
       echo("<BR><BR>----------------------------------------------------------------------");
?>
<!----------------------------------------------------------------------------->


<!--  PHP Example 4B  - Defining CONSTANTS  -->
<?php
      define( "BestWeapon",  "Master_Sword" );
?>
<!----------------------------------------------------------------------------->


<!--  PHP Example 4C  - Checking if CONSTANTS are defined  -->
<?php
       if( defined("BestWeapon") )
       {
            echo("This better be the Master Sword!");        
       }
       else
       {
            echo("BestWeapon has not yet been defined."); 
       }
?>

<!----------------------------------------------------------------------------->

<!--  PHP Example 4E  - Variable Variables  -->
<?php
      echo("<BR><BR><BR>---------Variable Variables---------<BR>");

      $X  =  "Link";
      $$X  =  "Zelda"; 
      
      echo("<BR>Value of normal variable X = "  .  $X);
      echo("<BR>Value of new variable variable Link = "  .  $Link);
?>
<!----------------------------------------------------------------------------->


<!--  PHP Example 4F  - Variable Methods  -->
<?php
      echo("<BR><BR><BR>--------- Built-in Variable Functions ---------<BR>");

      echo("<BR>Example 1: BANANA is empty.");
      $BANANA  =  "";
      
      if( empty( $BANANA ) )
      { echo("<BR>No more pudding!");     }
      else 
      { echo("<BR>There will be pudding!");  }
      
      echo("<BR><BR>Example 2: BANANA is not empty.");
      $BANANA  =  "Pudding";

      if( empty( $BANANA ) )
      { echo("<BR>No more pudding!");     }
      else 
      { echo("<BR>There will be pudding!");  }
      
?>
<!----------------------------------------------------------------------------->

