<?php
$access_token = 'n9hk/EALxpF+kaUpEY72ioJVJQwlDPSEZkT6da/B5T9nUgOFehAynNarS/Nm/W1970LlnyILMtLiHpZroVbA4h0m7rMf4RuqdaDcvHLGmE788snly/QDLAVvLG5rsTlwDZvisuSn/IK2D0+mHAnyTgdB04t89/1O/w1cDnyilFU=
';

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
			$textFromUser = $event['message']['text'];
			// Get replyToken


			// Build message to reply back
      if(strpos($textFromUser,'ฟ')!==FALSE || strpos($textFromUser,'์')!==FALSE){
						$text = $textFromUser;
					}
					else{
						$text = strtolower($textFromUser);
					}
					$replyToken = $event['replyToken'];
					if(strpos($text,'hi')!==FALSE || strpos($text,'hello')!==FALSE){
						$textSend="Hello".$events['events'][0]['source']['userName'];
					}
					else if(strpos($text,'old')!==FALSE || strpos($text,'อายุ')!==FALSE){
						$textSend="21 years old";
					}
					else if(strpos($text,'มิค')!==FALSE || strpos($text,'มิก')!==FALSE || strpos($text,'mic')!==FALSE){
						$textSend = "หนุ่มแว่นติ๋มๆ";
					}
					else if(strpos($text,'คิดถึง')!==FALSE){
						$textSend = "คิดถึงเหมือนกัน";
					}


			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

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
