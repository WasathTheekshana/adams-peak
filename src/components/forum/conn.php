<?php
session_start();
$db_username = 'u120382588_forum';
$db_password = 'tamRoqum0C&';
$conn = new PDO( 'mysql:host=localhost;dbname=forum', $db_username, $db_password );
if(!$conn){
die("Fatal Error: Connection Failed!");
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>