<?php
$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
$txt = $_cookie['eat'];
echo $_COOKIE['key'];
fwrite($myfile, $txt);
fwrite($myfile, "\n");
fclose($myfile);
echo "SCORE SAVED\n";
?>