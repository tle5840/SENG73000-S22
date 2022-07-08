<?php
if(isset($_POST['uname'])){

$postArray["username"] = $_POST['uname'];
$postArray["password"] = $_POST['password'];

$getcontent = file_get_contents('../json/authorizedUsers.json');
$tempArray = json_decode($getcontent);
array_push($tempArray,$postArray);
$jsonPut = json_encode($tempArray);
file_put_contents('../json/authorizedUsers.json', $jsonPut);
}
header('Location: ../login.html');
?>
