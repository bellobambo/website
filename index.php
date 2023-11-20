<?php
include("db.php");

$username = "ayo";
$password = "bello";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (users, password) VALUES ('{$username}', '{$hash}')";

try {
    if ($conn) {
        if (mysqli_query($conn, $sql)) {
            echo "Record inserted successfully <br>";
        } else {
            throw new Exception('Error inserting record: ' . mysqli_error($conn));
        }
    } else {
        throw new Exception('Could not establish a database connection.');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

mysqli_close($conn);
?>
