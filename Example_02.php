<!--  PHP Example 02  - Variable Declaration, Initialization and Usage -->
<!----------------------------------------------------------------------------->

<?php
      $FirstName  =  "Link";
      
      printf("<BR><BR>-----------------------------------------------------");
      printf("<BR>Example 1 =  Welcome to the game  %s !", $FirstName);
      printf("<BR> We are giving it 100 %%!");  
      printf("<BR>-----------------------------------------------------");
?>
<!----------------------------------------------------------------------------->


<!--  PHP Example 2B  -->
<?php
      $X  =  7777777;
      $Y  =  444;
      
      printf("<BR><BR><BR>-----------------------------------------------------");
      printf( "<BR>Example 2 =    A Number = %4d<BR>My Number = %.3f  ",  $X,  $Y );
      printf("<BR>-----------------------------------------------------");
?>
<!----------------------------------------------------------------------------->


<!--  PHP Example 2C  -->
<?php
      $FirstName  =  "Charles";
      $PhoneNumber  =  3868675309;
      printf("<BR><BR><BR>-----------------------------------------------------");
      printf("<BR>Example 3 =  %'* -100.100s 's phone number is %'*3f   %s",  $FirstName,  $PhoneNumber,  "<BR>");
      printf("<BR>-----------------------------------------------------");
?>
<!----------------------------------------------------------------------------->




<?php
      $PI  =  3.14159265;
      $NationalDeficit =  15719978774559.444;

      echo("<BR><BR><BR>-----------------------------------------------------");
      echo("<BR>Example 4");
      echo(  "<BR>1 National Deficit = " . number_format($NationalDeficit)  );
      echo(  "<BR>2 National Deficit = " . number_format($NationalDeficit, 3 )  );
      echo(  "<BR>3 National Deficit = " . number_format($NationalDeficit, 3,  "",  "."  )  );
      echo("<BR>-----------------------------------------------------");
?>
<!----------------------------------------------------------------------------->
