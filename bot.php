$proxy = 'proxyurl:port';'80' $proxyauth = 'username:password';'http://fixie:DDol4j7zXZ6m5i3@velodrome.usefixie.com'
<?php
$access_token = '5BYUK9okWxGTtZujRx/DtuHl7kEGeQU9lyW+cuxVjsgsK5ImLQ+4PRunO+M+MCasJ4g9gJuF211FfN5RfHoMrMg0tt+jHb/lymeuDUZa0NLffvYa5Uh55zb3f9p4WfQl37ZL71ptJXwtngNZ8+4IJgdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];ควยไง

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];ววย
			$post = json_encode($data);
      
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);	'5BYUK9okWxGTtZujRx/DtuHl7kEGeQU9lyW+cuxVjsgsK5ImLQ+4PRunO+M+MCasJ4g9gJuF211FfN5RfHoMrMg0tt+jHb/lymeuDUZa0NLffvYa5Uh55zb3f9p4WfQl37ZL71ptJXwtngNZ8+4IJgdB04t89/1O/w1cDnyilFU=';
	
                        $ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";
