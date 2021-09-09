<?php
header('Content-type: application/json');
$username = $_GET['user']; //take user
$secretkey = "mysecretkey"; //add your secret key here (you can just write random word)
$sig = hash_hmac('sha256', $secretkey, $username); //first hmac hash (secretkey + username)

$time = date('YmdH'); //(get date&time right now)
$time2 = date('Y-m-d H'); 
$exp = "2-3 Hours";
$hmac = hash_hmac('sha256', $sig, $time); //second hmac hash (the first hash + time)
$arr = array('User' => $username, 'Hmac' => $hmac, 'Time' => $time2, 'Expired' => $exp); //make array for json
$json = json_encode($arr); //encode to json
echo $json; //finish
?>  
