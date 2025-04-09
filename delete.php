<?php
$url = 'https://api101.up.railway.app/joke/101';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('content-Type: application/json'));

$response = curl_exec($ch);
?>
