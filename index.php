<!-- INTRO -->


<!-- <?php
// echo "i am loving php is a must <br>";
// echo 'its not bad so far'
//  this is a comment
// ?>

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
// $name = 'bambo. ';
// $food = 'pizza'  ;
// $email = 'bellobambo@gmail.com';

// $gpa = '2.5';


// $age = 21;
// $users = 20;
// $quantity = 4;
// $tax_rate = 5.1;
// $price = 10;

// $online = false;
// $for_sale = false;
// $employed = true;
// $total = null;



// echo "you have ordered {$quantity} x {$food} <br> <br>";

// $total = $quantity * $price;
// echo "Your total is \${$total} <br>";

// echo "hello {$name} i love {$food} <br> with email of {$email} <br>" ;
// echo "you are {$age} years old";

// echo "we have {$users} online presently";
// echo "how many quantity of gold do you want {$quantity}?";

// echo "your cgpa is \${$gpa} <br> <br>";
// echo "the sales task rate is {$tax_rate} <br>";

// echo "this user is currently {$online}"




// $x = 10;
// $y = 2;
// $z = null;

// // $z = $x + $y;
// $z = $x % $y;


// $counter = 0;

// $counter+=2;
// echo $counter;

// $total = 1 + 2 - 3 * 4 / 5 ** 6;

// echo $total;






// ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Enter a Number to count to :</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>

</body>

</html>




<?php

$counter = $_POST["counter"];

for ($i = 0; $i <= $counter; $i++) {
    echo $i . "<br>";
}


// for($i = 10 ;$i > 0; $i-- ){
//     echo $i . "<br>";
// }


// $grade = "rice";

// $date = date("1");
// $date = "pizza";


// switch ($date) {
//     case 'Monday':
//         echo'i hate mondays';
//         break;

//     case 'Tuesday':
//         echo'Taco tuesday';
//         break;
//     case 'Wednesday':
//         echo'work week is half over';
//         break;
//     case 'Thursday':
//         echo'almost the weekend';
//         break;
//     case 'Friday':
//         echo'the weekend is here';
//         break;
//     case 'Saturday':
//         echo'Time to Party';
//         break;
//     case 'Sunday':
//         echo'Time to Relax';
//         break;

//     default:
//         echo"{$date} is not a day";
// }

// switch ($grade) {
//     case "A":
//         echo"You did great";
//         break;
//     case "B":
//             echo"You did good";
//             break;    
//     case "C":
//         echo"You did okay";
//         break;
//     case "D":
//         echo"You did poorly";
//         break;
//     case "E":
//         echo"You did bad";
//         break;
//     case "F":
//         echo"You failed";
//         break;
//     default:
//         echo"{$grade} is not valid";    

// }

// $child = false;
// $senior = false;
// $ticket = null;

// if ($child || $senior) {
//     $ticket = 10;
// } else {
//     $ticket = 15;
// }

// echo"the ticket price is \${$ticket}";

// $age = 12;
// $citizen = true;

// if($age >= 18 && $citizen){
// echo"you can now vote";
// }else{
//     echo "you cant vote";
// }

// $temp = 15;
// $cloudy = true;


// if ($temp < 0 || $temp > 30) {
//     echo "the weather is pleasant";
// } else {
//     echo "the weather is bad <br>";
// }

// if (!$cloudy) {
//     echo "its cloudy";
// }else{
//     echo "its sunny";
// }

// $hours = 50;
// $rate = 15;
// $weekly_pay = null;


// if ($hours <= 0) {
//     $weekly_pay = 0;
// } elseif ($hours <= 40) {
//     $weekly_pay = "$hours * $rate";
// }else{
//     $weekly_pay = ($rate * 40) + ($hours - 40) * ($rate * 1.5);
// }

// echo "you made {$weekly_pay} this week alone";





// $adult = false;
// if($adult){
//     echo"you may enter this site";
// }else{
//     echo "you must be an adult";
// }

// $age = -1;

// if ($age >= 18) {
//     echo "you may enter";
// }
// elseif( $age <= 0) {
//     echo "not a valid age";
// }
// else{
// echo "you must be 18";
// }


// $radius = $_POST["radius"];
// $circumference = null;
// $volume = null;

// $circumference = 2 * pi() * $radius;
// $circumference = round($circumference, 2);

// $area = pi() *  pow($radius, 2);
// $area = round($area, 2);


// $volume = 4/3 * pi() * pow($radius, 3);
// $volume = round($volume);

// echo "Circumference = {$circumference}cm <br>";
// echo "Area = {$area}cm^2 <br>";
// echo "Volume = {$volume}";


// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];
// $total = null;
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = pow($x, $y);
// $total = sqrt(10);
// $total = rand(1, 10);
// echo $total;
?>