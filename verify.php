<?php
$access_token = 'wEgfsLgfAEZpLC30EwJGukdysBjsyicaNfIfp9YM7fpwJ2C1rwuqa2Mw4cICK8wavpXnOka+nMWt2AEuCu/2mA2zemHQbW8SFkRt3hHxNYWOG6a1a8avv92oWcOE5hEcBcNNLitM5PcsXmiNGe9iKwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
