<?php

$db_server = 'localhost';
$db_user = 'root';
$db_pass = 'Ayodeji21z';
$db_name = 'businessdb';
$conn = '';

try {
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    echo('connected <br>');
} catch (mysqli_sql_exception $e) {
    echo 'Could not connect: ' . $e->getMessage();
    // You might want to log the error or handle it in a way that suits your application.
}
if($conn){
    echo'connected to db';
}

?>
