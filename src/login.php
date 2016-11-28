<?php
echo "test";exit;
// CHECK USERNAME OR PASSWORD FROM DATABASE
$postdata = FILE_GET_CONTENTS("PHP://INPUT");
$request = JSON_DECODE($postdata);
$email = $request->email;
$password = $request->password;
IF($email == "ONE" && $password== "ONE"){
echo "1";
}
else {
echo "0";
}
?>