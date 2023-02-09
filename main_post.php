<?php 
#__________________________ POST _________________________

$ch =  curl_init();


#$data = http_build_query($array);

curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:8000/post/');
curl_setopt($ch, CURLOPT_POST, true);
#curl_setopt($ch, CURLOPT_POSTFIELDS, $ch);
#curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) echo curl_error($ch);
else $decoded = json_decode($response, true);

#var_dump($decoded);
#echo ($response);

curl_close($ch);
