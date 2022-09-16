<!--  PHP Example 14 - File Access  -->

<?php
echo("<CENTER>----------");
echo(" PHP File Access ");
echo("----------</CENTER>");

//----------------------------------------------------------------------------------- ---------
function CreateAFile($File_Name) {
    echo("<BR><BR><BR><BR><FONT FACE = \"Calibri\" COLOR=\"red\">");
    echo("Calling function CreateAFile().</FONT>");

    $DataFile = fopen($File_Name, "w") or die("$File_Name could not be opened.");

    if ($DataFile) {
        echo("<BR>The file $File_Name was created sucessfully!");
    }

    fclose($DataFile);
}

//--------------------------------------------------------------------------------------------
function WriteToAFile($File_Name) 
{
    echo("<BR><BR><BR><BR><FONT FACE = \"Calibri\" COLOR=\"red\">");
    echo("Calling function WriteToAFile().</FONT>");

    $Message1 = "<BR>Voila! In view humble vaudevillian veteran, " .
            "<BR>cast vicariously as both victim and villain by " .
            "<BR>the vicissitudes of fate. This visage, no mere " .
            "<BR>veneer of vanity, is a vestige of the vox populi " .
            "<BR>now vacant, vanished. However, this valorous " .
            "<BR>visitation of a bygone vexation stands vivified, " .
            "<BR>and has vowed to vanquish these venal and virulent " .
            "<BR>vermin, vanguarding vice and vouchsafing the " .
            "<BR>violently vicious and voracious violation of " .
            "<BR>volition. The only verdict is vengeance; a " .
            "<BR>vendetta, held as a votive not in vain, for the " .
            "<BR>value and veracity of such shall one day vindicate " .
            "<BR>the vigilant and the virtuous. Verily this " .
            "<BR>vichyssoise of verbiage veers most verbose, so let " .
            "<BR>me simply add that its my very good honour to meet " .
            "<BR>you and you may call me V.";

    $DataFile = fopen($File_Name, "w") or die("$File_Name could not be opened.");

    $BYTES = fwrite($DataFile, $Message1);

    echo("<BR>Number of bytes written to $File_Name = " . $BYTES . ".");

    fclose($DataFile);
}

//--------------------------------------------------------------------------------------------
function Read100BytesOfAFile($File_Name) {
    $DataFile = fopen($File_Name, "r") or die("$File_Name could not be opened.");

    $Message2 = fread($DataFile, 100);

    fclose($DataFile);

    echo("<BR><BR><BR><BR><FONT FACE = \"Calibri\" COLOR=\"red\">");
    echo("Calling function Read100BytesOfAFile().</FONT>");
    echo("<BR>The first 100 bytes of the file are:<BR>");
    echo("----------------------------------------------------");
    echo($Message2);
    echo("<BR>");
    echo("----------------------------------------------------");
    echo("<BR><BR>To which Evey (played by Natalie Portman) reponds:");
    echo("<BR>\"Are you like, a crazy person?\"");
}

//--------------------------------------------------------------------------------------------       
function ReadEntireFile($File_Name) {
    $DataFile = fopen($File_Name, "r") or die("$File_Name could not be opened.");

    $Message2 = fread($DataFile, filesize($File_Name));

    fclose($DataFile);

    echo("<BR><BR><BR><BR><FONT FACE = \"Calibri\" COLOR=\"red\">");
    echo("Calling function ReadEntireFile().</FONT>");
    echo("<BR>The ENTIRE contents of the file consists of: <BR>");
    echo("----------------------------------------------------");
    echo($Message2);
    echo("<BR>");
    echo("----------------------------------------------------");
    echo("<BR><BR>To which Evey (played by Natalie Portman) reponds:");
    echo("<BR>\"Are you like, a crazy person?\"");
}

//--------------------------------------------------------------------------------------------   
function DoesAFileExist() {
    echo("<BR><BR><BR><BR><FONT FACE = \"Calibri\" COLOR=\"red\">");
    echo("Calling function DoesAFileExist().</FONT>");

    if (file_exists("LinkData")) {
        echo("<BR>LinkData IS present on this system.");
    } else {
        echo("<BR>LinkData is NOT present on this system.");
    }
}

//-------------------------------------------------------------------------------------------- 
function AlternateFileAccessMethods1() {
    echo("<BR><BR><BR><BR><FONT FACE = \"Calibri\" COLOR=\"red\">");
    echo("Calling function AlternateFileAccessMethods1().</FONT>");

    $Message3 = "<BR>Remember, remember the 5th of November..." .
            "<BR>gunpowder, treason and plot." .
            "<BR>I see no reason why gunpowder treason" .
            "<BR>should ever be forgot.";

    file_put_contents("GuyFawkes.dat", $Message3);

    $TextTotal = file_get_contents("GuyFawkes.dat"); //gets entire contents of file

    echo("<BR>--------------------------------------------------");
    echo("<BR><BR>Displaying Contents Loaded From File<BR>");
    echo($TextTotal);
}

//-------------------------------------------------------------------------------------------- 
function AlternateFileAccessMethods2() {
    echo("<BR><BR><BR><BR><FONT FACE = \"Calibri\" COLOR=\"red\">");
    echo("Calling function AlternateFileAccessMethods2().</FONT>");

    $TextArray = file("GuyFawkes.dat"); //stores contents line by line in an array

    echo("<BR>--------------------------------------------------");
    echo("<BR>Result of calling \"file\":<BR>");
    echo($TextArray[0]);

    $TextLine = fgets("GuyFawkes.dat", 35); //Gets single line up to specified character
    echo("<BR><BR>Result of calling \"fgets\":<BR>");
    echo($TextLine);

    $TextChar = fgetc("GuyFawkes.dat"); //Gets a single character
    echo("<BR>Result of calling \"fgetc\":<BR>");
    echo($TextChar);

    //Locks a file: 1 = read only, 2 = no access, 3 = unlock
    flock("AreYouLikeACrazyPerson.dat", 1);
}

//--------------------------------------------------------------------------------------------             
//Functions Calls
DoesAFileExist("LinkData");
CreateAFile("LinkData");
WriteToAFile("AreYouLikeACrazyPerson.dat");
Read100BytesOfAFile("AreYouLikeACrazyPerson.dat");
ReadEntireFile("AreYouLikeACrazyPerson.dat");
DoesAFileExist("LinkData");
AlternateFileAccessMethods1();
AlternateFileAccessMethods2();
?>
