<?php
include($_SERVER['DOCUMENT_ROOT']."/ccms_config.php");
include($admin_sys_path."/functions.php");
$msg = "";
if(isset($_POST["submit"])){
    $sql = "INSERT INTO entries
            (`entry_title`)
            VALUES
            ('".secure($_POST["title"])."')";
    mysql_query($sql);
    $msg = "<p>Success! Entry submitted.</p>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Submit</title>
        <style>
            fieldset, p, h1{
                border:1px solid #CCCCCC;
                padding:10px;
                margin:10px;
            }
        </style>
    </head>
    <body>
        <h1>Submit an Entry!</h1>
        <?php if(!empty($msg)){ echo $msg; } ?>
        <form method="post" action="submit.php">
            <fieldset>
                <legend>Entry Form</legend>
                <label for="title">Test Title:</label>
                <input type="text" name="title" />
                <input type="submit" name="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>