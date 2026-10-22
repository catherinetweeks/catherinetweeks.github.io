<!DOCTYPE html>
<html>
<body>

<?php
$color = "red";
echo "My car is $color<br>";
echo "My house is $COLOR";

# global variables have capital letters local lowercase 

var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

$x = 5;
$y = 10;

// global variables work a bit different here
function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>

</body>
</html>