<!DOCTYPE html>
<html>
<body>

<form method="Post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<div>
     Name: <input type="text" name="fname" autofocus>
</div>
<div>
  mobile: <input type="number" name="mobile">
</div>
<div>
  <input type="submit">
</div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty <br>";
    } else {
        echo "Welcome:$name<br>";
    }
    $mobile = htmlspecialchars($_REQUEST['mobile']);
    if (empty($mobile)) {
        echo "mobile is empty";
    } else {
        echo $mobile;
    }
}
?>

</body>
</html>