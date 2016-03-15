<?php
if($_POST)
{
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
/*mysql_query("");*/
    
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
    
}else { }

?>