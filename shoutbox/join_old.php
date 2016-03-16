<?php
if($_POST)
{
    echo "hi";
    /*Gets individual input values from the dataString in `editor.html`*/
    
//$numberNa1=$_POST['numberNa1'];
//$numbern1=$_POST['numbern1'];
//$numberoi1=$_POST['numberoi1'];
//$numbers1=$_POST['numbers3'];
//$numberf1=$_POST['numberf1'];

   for($i=0;$i<19;$i++) {

${"numberNa" . $i} = $_POST['playerN'.$i];
${"numbern" . $i} = $_POST['numbern'.$i];
${"numberoi" . $i} = $_POST['numberoi'.$i];
${"numbers" . $i} = $_POST['numbers'.$i];  
${"numberf" . $i} = $_POST['numberf'.$i];  

}
    
     $myfile = fopen("newfile.txt", "w") or die("Unable to open file!"); /*Opens file and edits the file. */
   
    
    
    /*mysql_query("");*/
//    echo "hi2";
//    $myfile = fopen("newfiler.txt", "w") or die("Unable to open file!"); /*Opens file and edits the file. */
    /*Left Player 1 Data*/
//    fwrite($myfile, $numbern1. "\r\n");/*Number*/
//    fwrite($myfile, $numberNa1. "\r\n");/*Name*/
//    fwrite($myfile, $numberf1. "\r\n");/*Foul*/
//    fwrite($myfile, $numbers3. "\r\n");/*Score*/
//    fwrite($myfile, $numberoi1. "\r\n");/*O/I*/
//    
     for($r=0;$r<19;$r++) {
    fwrite($myfile, ${"numbern" .$r}. "\r\n");
    fwrite($myfile, ${"numberNa" .$r}. "\r\n");
    fwrite($myfile, ${"numberf" .$r}. "\r\n");
    fwrite($myfile, ${"numbers" .$r}. "\r\n");
    fwrite($myfile, ${"numberoi" .$r}. "\r\n");
     }
    /*Left Player 2 Data*/
    /*Etc?*/
    
    
    fclose($myfile);
    
}else { }


?>