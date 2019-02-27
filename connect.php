<?php

$dsn = 'mysql:host=localhost; dbname=althari';
$user = 'root';
$pass = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);C:\xampp\htdocs\althari\connect.php
try {
    $db = new PDO ($dsn, $user, $pass, $options);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'You Are Connected';
}
catch(PDOException $e) {
    echo 'Failed'. $e ->getmessage();
}

?>
