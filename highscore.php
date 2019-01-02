<?php
$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
$txt = $_GET['var'];
fwrite($myfile, $txt);
fwrite($myfile, "\n");
fclose($myfile);
echo "SCORE SAVED\n";
?>