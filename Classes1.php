<?php

//-----------------------------------------------------------------------

    echo("<HEAD><TITLE>PHP Session Fun!</TITLE>");
    echo("</HEAD>");
    echo("<BODY bgcolor=\"black\" text=\"white\">");
    echo("<FONT FACE=\"Comic Sans MS\" SIZE=\"4\">");
    echo("<CENTER>----------");
    echo(" PHP Classes!");
    echo("----------</CENTER>");    
    
 //Defining a Class--------------------------------------------  
    class Monster
    {
          public $MonsterName;
          public $MonsterAge;
          public $MonsterHP;
          
          //Constructor
          public function Monster()
          {
                 echo("<BR> Building a Monster!<BR>");
          }
          
          public function DisplayMonster()
          {
                 $VIEW =  "<BR>--------Monster's Current Stats-------" .
                          "<BR> Name = " . $this->MonsterName .
                          "<BR> Age = " . $this->MonsterAge . 
                          "<BR> HP = " . $this->MonsterHP . 
                          "<BR>-------------------------------------------<BR>";
                 return $VIEW;
          }
    }
  //----------------------------------------------------------- 
 //Instantiating a Class   
    
    $Godzilla = new Monster();
    $Godzilla->MonsterName = "Godzilla";
    $Godzilla->MonsterAge = 10;
    $Godzilla->MonsterHP = 1000;
    
    echo($Godzilla->DisplayMonster());
    echo("</FONT>");
    echo("</BODY>");
//-----------------------------------------------------------------------    
?>