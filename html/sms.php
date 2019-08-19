<?php

if(trim($_GET["oo"])=="") return;


$data = array(
  'type' => 'lms',
  'contentType' => 'comm',
  'countryCode' => '82',
  'from' => '01099473474',
  'to' => array($_GET["oo"]),
  "subject"=>"장문메세지입니다요.",
  "content"=>$_GET["m"]
);

$data = json_encode($data);
$url = "https://api-sens.ncloud.com/v1/sms/services/ncp:sms:kr:254066187779:dbtosms/messages";

$ch = curl_init();                                
curl_setopt($ch, CURLOPT_URL, $url);            
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);     
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);    
curl_setopt($ch, CURLOPT_POST, true);            
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',"x-ncp-auth-key: UvQHOymVJ5yh4RHOjzVD","x-ncp-service-secret: 26d8de35618d4427b8ee0a0245a29a21"));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>
