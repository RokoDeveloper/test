<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$json_data = array('d' => 1);
$json_data = json_encode($json_data);

$curl_desc = curl_init('http://project.local/json.php');


curl_setopt($curl_desc, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl_desc, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl_desc, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($curl_desc, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl_desc);
print_R($result);



 ?>
