<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("sample.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

</body>
</html>