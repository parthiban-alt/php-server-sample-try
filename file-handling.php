<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("C:/xampp/htdocs/php-Lnadingpage/landing", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

</body>
</html>