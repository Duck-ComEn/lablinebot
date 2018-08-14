<?php


$access_token = 'A8BmaH309POKkN9wn83sv72i11RXXdTKppuGtSfUx1R+4KMWjWF/2LhrIvUvdYYSAXir/TPArwXgkZl8aoDAb+g7iwT1FLhDFf4krbFHq0JF7auYjIiDy5j/M3HmkjAkRdsNM3Kdh87eeG3X3iV4uwdB04t89/1O/w1cDnyilFU=';

$userId = 'U3471a0a5fde4f8cdea9dd4ff5b8d990e';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

