<?php
$num = 10;
$num +=89;
$num -=9;
$num *=23;
$num /=15;
$num +=67;

echo $num;
echo"<BR>";

$n = "Aptech";
$n .= "Learning";
$n .= "Computer Education";

echo $n;    
echo"<BR>";

$f = 8;
$f ++;
$f ++;
$f ++;
$f --;
$f ++;
$f --;
$f --;
$f ++;
$f ++;
$f ++;
$f --;

echo $f;

// $user = "yxv";

// if($user == "Admin"){
//     echo "<script> alert ('login successfully')</script>";
// }
// else {echo "<script> alert ('login failed')</script>";}

echo"<BR>";

$a = 35;
$b = $a > 20 ? "true" : "false";

echo $b;
echo"<BR>";


// $userID = "Nabiha";
// $password = "12345";

// $result = $userID == "Nabiha" && $password == "123456" ? 
// "<script> alert ('login successfully')</script>" :
//  "<script> alert ('login failed')</script>";

// echo $result;

//=== and == function 

$k = 2;

if ($k == "2"){
    echo "condition is true";
}
else {
    echo "condition is false";
}

echo"<BR>";

$l = 2;

if ($l === "2"){
    echo "condition is true";
}
else {
    echo "condition is false";
}

echo"<BR>";

$name = "KHAN";

if( $name != "KHANI"){
    echo "USERNAME :"." ".$name;
}

echo"<BR>";

$number = "567890";

if( $number !== 567890){
    echo "NUMBER :"." ".$number;
}

?>

