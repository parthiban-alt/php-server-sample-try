<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("sample.txt", "a+") or die("Unable to open file!");
$text1 ="karthick\n";
fwrite($myfile,$text1);
$text2 ="Suresh\n";
fwrite($myfile,$text2);
fclose($myfile);
?>

</body>
</html>