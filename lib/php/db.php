<?php
$user = 'php';
$password = 'myphppassword';
$server = '138.68.190.160';
$database = 'trainyourlife';

$dsn = 'mysql:host='.$server.";dbname=".$database.";charset=utf8";
try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ERRMODE_EXCEPTION,PDO::ATTR_PERSISTENT);
} catch (PDOException $e) {
    echo "Something went wrong accessing Database <br/>";
    echo $e->getMessage();
}