<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("sample.txt", "w") or die("Unable to open file!");
$text1 ="PARTHIBAN"."\n"."HTML = HYPER TEXT MARKUP LANGUAGE";
fwrite($myfile,$text1);
fclose($myfile);
?>

</body>
</html>