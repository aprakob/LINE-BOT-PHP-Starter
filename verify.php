<?php
$access_token ='5BYUK9okWxGTtZujRx/DtuHl7kEGeQU9lyW+cuxVjsgsK5ImLQ+4PRunO+M+MCasJ4g9gJuF211FfN5RfHoMrMg0tt+jHb/lymeuDUZa0NLffvYa5Uh55zb3f9p4WfQl37ZL71ptJXwtngNZ8+4IJgdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);5BYUK9okWxGTtZujRx/DtuHl7kEGeQU9lyW+cuxVjsgsK5ImLQ+4PRunO+M+MCasJ4g9gJuF211FfN5RfHoMrMg0tt+jHb/lymeuDUZa0NLffvYa5Uh55zb3f9p4WfQl37ZL71ptJXwtngNZ8+4IJgdB04t89/1O/w1cDnyilFU=';
 
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
