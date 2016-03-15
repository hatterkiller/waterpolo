<?php
if($_POST)
{
    /*Gets individual input values from the dataString in `editor.html`*/
    $numberNa1=$_POST['numberNa1'];
    $numbern1=$_POST['numbern1'];
    $numberoi1=$_POST['numberoi1'];
    $numbers1=$_POST['numbers1'];
    $numberf1=$_POST['numberf1'];
    
    /*mysql_query("");*/
    
    $myfile = fopen("newfilse.txt", "w") or die("Unable to open file!"); /*Opens file and edits the file. */
    /*Left Player 1 Data*/
    fwrite($myfile, $numbern1. "\r\n");/*Number*/
    fwrite($myfile, $numberNa1. "\r\n");/*Name*/
    fwrite($myfile, $numberf1. "\r\n");/*Foul*/
    fwrite($myfile, $numbers1. "\r\n");/*Score*/
    fwrite($myfile, $numberoi1. "\r\n");/*O/I*/
    
    
    /*Left Player 2 Data*/
    /*Etc?*/
    
    
    fclose($myfile);
    
}else { }








?>