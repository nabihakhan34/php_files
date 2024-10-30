<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

for ($i = 0; $i < 6; $i++) {
    echo $i;
}

echo "<br>";

$j = 2;
while ( $j <=9){
 echo $j;
 $j++;
}


 $tab = 5;
 echo "<table>";
$num =1;
 while( $num <=10){
    ?>
<tr>
    <td><?php echo $tab; ?></td>
    <td>X</td>
    <td><?php echo $num; ?></td>
    <td>=</td>
    <td><?php echo $tab*$num; ?></td>
</tr>
<?php
$num++;
 }
 echo "</table>";

$tab = 6;
echo "<table>";
for ($i = 0; $i <= 10; $i++) {
?>
<tr>
<td><?php echo $tab; ?></td>
<td>X</td>
<td><?php echo $i;?></td>
<td>=</td>
<td><?php echo $tab*$i; ?></td>
</tr>

<?php
}

echo "</table>";

?>



    
</body>
</html>