<?php
$access_token = 'n9hk/EALxpF+kaUpEY72ioJVJQwlDPSEZkT6da/B5T9nUgOFehAynNarS/Nm/W1970LlnyILMtLiHpZroVbA4h0m7rMf4RuqdaDcvHLGmE788snly/QDLAVvLG5rsTlwDZvisuSn/IK2D0+mHAnyTgdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
