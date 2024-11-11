<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>PHP PROGRAMMING</h1>

<?php

echo "<P>hello world</P>";
echo "<h1>welcome to my website</h1>";
echo "php codes";

?>

<h1><?php echo "PHP CODES"?></h1>

<?php 

echo 10;
echo "<br>";
echo true;

echo "<h1>VARIABLES</h1>";

$num1 = 20;
$num2 = 40;
echo "Addition :" ." ".$num1 + $num2;

?>

<p><b><i><?php echo "Addition :" ." ".$num1 + $num2;?></i></b></p>

<?php

$num = 56;
$num += 78;

echo $num;
echo"<br>";

$name = "NABIHA";
$age = 19;
$qualification = "BS-MASS-COM";

echo "NAME : ".$name."   "."AGE :".$age."   "."QUALIFICATION :".$qualification;

echo"<br>";
echo"<br>";

$name1 = "AMMAR";
$name2 = "ABDULLAH";
$name3 = "BASIL";

print $name." ".$name1." ".$name2." ".$name3;

echo"<br>";

$string = "NETHERLANDS";
var_dump(value: $string);

echo"<br>";

$integer = 123456789;
var_dump(value: $integer);

echo"<br>";

$boolean = true;
var_dump(value: $boolean);

echo"<br>";

$float = 12.8967;
var_dump(value: $float);

echo"<br>";

$array = ["mauritius" , 67890 , false , 78.321];
var_dump(value: $array);

?>
</body>
</html>