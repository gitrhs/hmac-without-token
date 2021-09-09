<?php
$username = $_GET['user']; //user name
$hmac = $_GET['hmac']; //hmac that you get from token.php
$secretkey = "mysecretkey"; //your secret key (put the secret key same as token.php)
$sig = hash_hmac('sha256', $secretkey, $username);
//The Time now
$hour = date('YmdH');
//The Time 1 hour ago
$minus1 = $hour - 1;
//The Time 2 hours ago
$minus2 = $hour - 2;
//First Possibility, hour of making hmac = hour now
$possibility1 = hash_hmac('sha256', $sig, $hour);
//Second Possibility, hour of making hmac = 1 hour ago
$possibility2 = hash_hmac('sha256', $sig, $minus1);
//Third Possibility, hour of making hmac = 2 hours ago
$possibility3 = hash_hmac('sha256', $sig, $minus2);

//add your content here!
$content = "This is the example content if success!";

if(strpos($hmac, $possibility1) !== false){
    echo "$content";
}
else if(strpos($hmac, $possibility2) !== false){
    echo "$content";
}
else if(strpos($hmac, $possibility3) !== false){
    echo "$content";
}
    else {
        echo "Error! Hmac Invalid/Expired!";
    }
?>
