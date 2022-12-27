<?php
include 'conn.php';
$id = test_input($_POST['id']);
$name = test_input($_POST['name']);
$msg = test_input($_POST['msg']);
if($name != "" && $msg != ""){
	$sql = $conn->query("INSERT INTO experience (parent_comment, name, comment)
			VALUES ('$id', '$name', '$msg')");
	echo json_encode(array("statusCode"=>200));
}
else{
	echo json_encode(array("statusCode"=>201));
}
$conn = null;

?>