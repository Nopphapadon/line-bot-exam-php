<?php


$access_token = 'ByA6ZDJdAHqEOUrtzDU23arxqQ3VQeAuJQ8UpytrDdcTKfTrXsM74ntHVbTWNCAyn5iUaU8KGSie5q7B5NY1xDdTS+RmTHf7vV5L0p0mUHhm15+Yz8GHxao5DD66JxWTBtqGd3vjLyRNfFYNGEPn0gdB04t89/1O/w1cDnyilFU=';

$userId = 'U8159d10249e16b6ed051ab6fae5d3e2d';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

