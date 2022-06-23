<?php
$myfile = fopen("sd2.txt", "w");
$txt = "Sourabh\n";
fwrite($myfile, $txt);
$txt = "Sourabh\n";
fwrite($myfile, $txt);
fclose($myfile);
?>