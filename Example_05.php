<!--  PHP Example 5A  - ereg() searches Patterns and Regular Expressions  -->

<?php

      echo("<BR>Using ereg() to search for regular expression: \"^.+@.+\..+\" ");      

      $EMAIL1  =  "cgermany77@yahoo.com";
      $EMAIL2  =  "supercalafrajalistic";
      
      echo("<BR>Testing email address 1: <BR>");
      
      $GoodAddress  =   ereg( "^.+@.+\..+", $EMAIL1 );

      if( $GoodAddress )
      {    
          echo("  Looks like a REAL email address. ");     
      }
      else 
      {  
          echo(" Looks like a FAKE email address. ");         
      }
      
      echo("<BR>Testing email address 2: <BR>");
      
      $GoodAddress  =   ereg( "^.+@.+\..+", $EMAIL2 );

      if( $GoodAddress )
      {    
          echo("  Looks like a REAL email address. ");     
      }
      else 
      {  
          echo(" Looks like a FAKE email address. ");         
      }
      
      echo("<BR><BR>-------------------------------------------------------------");

?>

<!---------------------------------------------------------------------------->


<!--  PHP Example 5B - ereg() searches Patterns and Regular Expressions
      and generates substrings -->

<?php

      echo("<BR><BR>Using ereg() to search for regular expression: \"^(.+)@(.+)\.(.+)\" "); 
      echo("<BR>ereg() will also generate substrings based on the expression.");
      
      $EMAIL  =  "HatsuneMiku";

      $GoodAddress  =   ereg( "^(.+)@(.+)\.(.+)", $EMAIL,  $EmailArray );

      if( $GoodAddress )
      {    
          echo("<BR>Looks like a REAL email address. <BR> ");
                           
          echo ("<BR>Full address:  $EmailArray[0]  <BR> "  .
                "<BR>User: $EmailArray[1]   <BR>" .
                "<BR>Domain: $EmailArray[2]   <BR>" .
                "<BR>Top-Level Domain: $EmailArray[3]   ");
      }
      else 
      {  
          echo("<BR>Looks like a FAKE email address. ");       
      }
        
      echo("<BR>-------------------------------------------------------------");
?>

<!----------------------------------------------------------------------------> 

<!--  PHP Example 5C - ereg_replace() to replace one string with another  -->

<?php

     echo("<BR><BR>Using \"ereg_replace\" to replace \"Zelda\" with \"Midna\":<BR><BR>"); 

     $HappyEnding  =  "Zelda and Link embrace and live happily ever after.";
     $HappyEnding = ereg_replace(  "Zelda",  "Midna",  $HappyEnding  );
     
     echo( $HappyEnding );
     echo( "<BR>This was the Twilight Princess's happy ending!" );
     echo("<BR>-------------------------------------------------------------");
?>

<!---------------------------------------------------------------------------->

<!--  PHP Example 5D - ereg_replace() to replace substrings  -->

<?php

     echo("<BR><BR>Using \"ereg_replace\" to replace substrings:<BR><BR>"); 

     $HappyEnding  =  "Zelda and Link embrace and live happily ever after.";
     $HappyEnding  =   ereg_replace(  "Z(eld)a",  "Z\\1I",  $HappyEnding  );
     
     echo(  $HappyEnding  );
     
     echo("<BR>-------------------------------------------------------------");
?>

<!---------------------------------------------------------------------------->

<!--  PHP Example 5E - split() breaks a string into substrings based on pattern -->

<?php

     echo("<BR><BR>Using the \"split\" method:<BR><BR>"); 

     $HappyEnding  =  "Zelda and Link embrace and live happily ever after.";
     $WordArray =   split( " ", $HappyEnding );

     echo(  "$WordArray[0] <BR>  $WordArray[1] <BR>  $WordArray[2] <BR>" .
            "$WordArray[3] <BR>  $WordArray[4] <BR>  $WordArray[5] <BR>" .
            "$WordArray[6] <BR>  $WordArray[7] <BR>  $WordArray[8] <BR>"  );
     
     echo("<BR>-------------------------------------------------------------");
?>

<!---------------------------------------------------------------------------->
