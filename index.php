<?php
$connection_string = 'mysql:host=localhost;port=3306;dbname=db_test';
$user = 'root';
$pass = '';
try {
    $db_connection = new PDO($connection_string, $user, $pass);
    $sql = "INSERT INTO `clients`(`first_name`, `last_name`, `phone`) VALUES ('Alaa','Karaja','+972123455667')";
    $db_connection->prepare($sql)->execute();
    echo 'Connected Successfully...';
} catch (PDOException $e) {
    echo 'Error Happened: ' . $e->getMessage();
}