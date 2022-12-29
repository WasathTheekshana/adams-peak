<?php
session_start();
$db_username = 'sripadaya';
$db_password = 'tamRoqum0C&';
$conn = new PDO( 'mysql:host=127.0.0.1:3306;dbname=u120382588_forum', $db_username, $db_password );
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