<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<center><h1>INDEX ARRAY</h1></center>

<?PHP

$studentDetail = ["NABIHA" , "AMMAR" , "ABDULLAH" , "BASIL" , "FABIHA" , "RUMAISA"];
echo $studentDetail[0];
echo"<br>";
echo $studentDetail[3];
echo"<br>";
echo $studentDetail[5];
echo"<br>";
echo $studentDetail[4];
echo"<br>";
echo $studentDetail[1];
echo"<br>";
echo $studentDetail[2];
echo"<br>";
echo"<br>";

$studentDetail = ["NABIHA" , "AMMAR" , "ABDULLAH" , "BASIL" , "FABIHA" , "RUMAISA"];

foreach($studentDetail as $values){
    echo $values;
    echo"<br>";
}

?>

<center><h1>ASSOCIATIVE ARRAY</h1></center>

<?PHP

$assocArray = ['Carname' => 'Mehran' , 'Model' => '2000' , 'Color' => 'Black'];

echo $assocArray['Carname'];
echo"<br>";
echo $assocArray['Model'];
echo"<br>";
echo $assocArray['Color'];
echo"<br>";
echo"<br>";

$assocArray = ['Carname' => 'Mehran' , 'Model' => '2000' , 'Color' => 'Black'];

foreach($assocArray as $key => $data){
echo $key." : ".$data;
echo"<br>";
}

echo "<h2>WE CAN ALSO USE 'ARRAY' FUNCTION</h2>";

echo "<h4>INDEX</h4>";

$cars = array("Volvo","BMW","Toyota");

echo "I like " .$cars[0]. ", ".$cars[1]." and ".$cars[2]."<br>";

echo "<h4>ASSOCIATIVE</h4>";

$fun = array('Carname' => 'Mehran' , 'Model' => '2000' , 'Color' => 'Black');

echo $fun['Carname']." ".$fun['Model']." ".$fun['Color'];

?>

<center><h1>MULTI DIMENSIONAL ARRAY (INDEX)</h1></center>

<?PHP

$Multi_Dimensional_Index_Array = [
    ['nabiha' , '20' , 'bs-mc' , 'karachi'],
    ['ammar' , '18' , '10th' , 'karachi'],
    ['abdullah' , '15' , '7th' , 'karachi']
];

echo $Multi_Dimensional_Index_Array[0][0]." ";
echo $Multi_Dimensional_Index_Array[0][1]." ";
echo $Multi_Dimensional_Index_Array[0][2]." ";
echo $Multi_Dimensional_Index_Array[0][3];
echo"<br>";
echo $Multi_Dimensional_Index_Array[1][0]." ";
echo $Multi_Dimensional_Index_Array[1][1]." ";
echo $Multi_Dimensional_Index_Array[1][2]." ";
echo $Multi_Dimensional_Index_Array[1][3];
echo"<br>";
echo $Multi_Dimensional_Index_Array[2][0]." ";
echo $Multi_Dimensional_Index_Array[2][1]." ";
echo $Multi_Dimensional_Index_Array[2][2]." ";
echo $Multi_Dimensional_Index_Array[2][3];

$Multi_Dimensional_Index_Array = [
    ['nabiha' , '20' , 'bs-mc' , 'karachi'],
    ['ammar' , '18' , '10th' , 'karachi'],
    ['abdullah' , '15' , '7th' , 'karachi']
];

foreach($Multi_Dimensional_Index_Array as $rows){
    foreach($rows as $colums){
        echo "<p>".$colums."</p>";
    }
}
?>

<center><h1>MULTI DIMENSIONAL ARRAY (ASSOCIATIVE)</h1></center>

    <?PHP
    
$Ass = [
    'Rider1' => ['Name' => 'Gulfam' , 'Contact' => '032145671' , 'Code' => '#67#'],
    'Rider2' => ['Name' => 'Behroz' , 'Contact' => '04162780' , 'Code' => '#88#'],
    'Rider3' => ['Name' => 'Akram' , 'Contact' => '02345678' , 'Code' => '#40#'],
];

foreach( $Ass as $mainKey){
    foreach($mainKey as $subKey){
        echo "<p>".$subKey."</p>";
    }
}

echo "<h5>Another way to print</h5>";

echo "Rider3-code"." : ".$Ass['Rider3']['Code'];
echo"<br>";
echo "Rider2-Contact"." : ".$Ass['Rider2']['Contact'];
echo"<br>";
echo "Rider1-Name"." : ".$Ass['Rider1']['Name'];
echo"<br>";
echo "Rider1-code"." : ".$Ass['Rider1']['Code'];
echo"<br>";
echo "Rider2-Name"." : ".$Ass['Rider2']['Name'];
echo"<br>";
echo "Rider3-Contact"." : ".$Ass['Rider3']['Contact'];
echo"<br>";
echo "Rider2-code"." : ".$Ass['Rider2']['Code'];
echo"<br>";
echo "Rider1-Contact"." : ".$Ass['Rider1']['Contact'];
echo"<br>";
echo "Rider3-Name"." : ".$Ass['Rider3']['Name'];

    
    ?>

</body>
</html>