<?php

$agent = $_SERVER['HTTP_USER_AGENT'];
$uri = $_SERVER['REQUEST_URI'];
$user = $_SESSION['email'];
$ip = $_SERVER['REMOTE_ADDR'];
$ref = $_SERVER['HTTP_REFERER'];
$dtime = date('r');

if($ref == ""){
$ref = "None";
}
if($user == ""){
$user = "None";
}

$entry_line = "$dtime - IP: $ip | Agent: $agent | URL: $uri
 | Referrer: $ref | Username: $user \n";
$fp = fopen("logs.txt", "a");
fputs($fp, $entry_line);
fclose($fp);
?>