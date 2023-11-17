<!-- INTRO -->


<!-- <?php
echo "i am loving php is a must <br>";
echo 'its not bad so far'
//  this is a comment
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>    
<button>
Order a Pizza</button>
</body>

</html> -->


<!-- VAR -->

<?php
$name = 'bambo. ';
$food = 'pizza'  ;
$email = 'bellobambo@gmail.com';

$gpa = '2.5';


$age = 21;
$users = 20;
$quantity = 4;
$tax_rate = 5.1;
$price = 10;

$online = false;
$for_sale = false;
$employed = true;
$total = null;



echo "you have ordered {$quantity} x {$food} <br> <br>";

$total = $quantity * $price;
echo "Your total is \${$total} <br>";

echo "hello {$name} i love {$food} <br> with email of {$email} <br>" ;
echo "you are {$age} years old";

echo "we have {$users} online presently";
echo "how many quantity of gold do you want {$quantity}?";

echo "your cgpa is \${$gpa} <br> <br>";
echo "the sales task rate is {$tax_rate} <br>";

echo "this user is currently {$online}"

?>
