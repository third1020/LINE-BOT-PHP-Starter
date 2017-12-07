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
			$replyToken = $event['replyToken'];

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
					else if(strpos($text,'ทำไร')!==FALSE || strpos($text,'ทำรัย')!==FALSE || strpos($text,'ทำราย')!==FALSE){
						$random = rand(1,5);
						switch($random){
							case 1 : $textSend = "กำลังเขียนโค้ด JAVA อยู่"; break;
							case 2 : $textSend = "นอนอยู่"; break;
							case 3 : $textSend = "ดูบอลอยู่"; break;
							case 4 : $textSend = "เล่นรูบิคอยู่คับ"; break;
							case 5 : $textSend = "อ่านหนังสือ"; break;
						}
					}
					else if(strpos($text,'สุดยอด')!==FALSE || strpos($text,'สุกยอด')!==FALSE){
						$textSend = "ใช่ๆ สุดยอดไปเลย";
					}
					else if(strpos($text,'ไม่รุ้')!==FALSE || strpos($text,'ไม่รู้')!==FALSE || strpos($text,'ไม่รุว')!==FALSE || strpos($text,'ไม่ทราบ')!==FALSE || strpos($text,'ไม่ซาบ')!==FALSE){
						$textSend = "ง่ายๆ แค่นี้ไม่รู้";
					}
					else if(strpos($text,'ขอบคุณ')!==FALSE || strpos($text,'ขอบใจ')!==FALSE || strpos($text,'ขอบคุน')!==FALSE){
						$textSend = "ไม่เป็นไรครับ";
					}
					else if(strpos($text,'ขอโทษ')!==FALSE || strpos($text,'ขอโทด')!==FALSE || strpos($text,'ขอโตด')!==FALSE || strpos($text,'ท่ด')!==FALSE){
						$random = rand(1,5);
						switch($random){
							case 1 : $textSend = "ไม่ให้อภัยยย"; break;
							case 2 : $textSend = "ไม่เป็นไรจ้า ผมเป็นคนใจดี"; break;
							case 3 : $textSend = "ผมให้อภัยเสมอ"; break;
							case 4 : $textSend = "ไม่รับคำขอโทษคับ อิอิ"; break;
							case 5 : $textSend = "ไม่ต้องขอโทษ ฉันก็พร้อมจะไป"; break;
						}
					}
					else if(strpos($text,'อ่านเร็ว')!==FALSE || strpos($text,'อ่านเรว')!==FALSE){
						$textSend = "ผมจ้องหน้าจอทอสับตลอด ฮ่าๆๆๆ";
					}
					else if(strpos($text,'1+1')!==FALSE || strpos($text,'1 + 1')!==FALSE || strpos($text,'1+ 1')!==FALSE || strpos($text,'1 +1')!==FALSE){
						$textSend = "1 + 1 = 2";
					}
					else if(strpos($text,'ถุ้ย')!==FALSE || strpos($text,'ถรุ้ย')!==FALSE || strpos($text,'ถุย')!==FALSE || strpos($text,'ถรุย')!==FALSE){
						$textSend = $text;
					}
					else if(strpos($text,'พิมพ์ตาม')!==FALSE || strpos($text,'พิมตาม')!==FALSE || strpos($text,'พิมพตาม')!==FALSE){
						if(strpos($text,'ทำไม')!==FALSE || strpos($text,'ทำมาย')!==FALSE || strpos($text,'ทำมัย')!==FALSE || strpos($text,'ทะมาย')!==FALSE){
							$textSend = "ผมไม่ได้พิมพ์ตามสักหน่อยย อิอิ";
						}
						else{
							$textSend = "โอเคค";
						}
					}
					else if(strpos($text,'name')!==FALSE || strpos($text,'บื่อ')!==FALSE || strpos($text,'ซื่อ')!==FALSE){
						$textSend="My name is Alex";
					}
					else if(strpos($text,'55')!==FALSE || strpos($text,'ฮ่า')!==FALSE || strpos($text,'ห้ะ')!==FALSE){
						$random = rand(1,5);
						switch($random){
							case 1 : $textSend = "ขำอะไรหว่าาา 555"; break;
							case 2 : $textSend = "น่าขำตรงไหน อิอิ"; break;
							case 3 : $textSend = "ฮ่าๆๆๆๆ"; break;
							case 4 : $textSend = "ตลกมากๆ"; break;
							case 5 : $textSend = "อารมณ์ดีจัง"; break;
						}
					}
					else if(strpos($text,'คือ')!==FALSE && !(strpos($text,'อะไร')!==FALSE)){
						$random = rand(1,3);
						switch($random){
							case 1 : $textSend = "อ๋อ อย่างงี้นี่เอง"; break;
							case 2 : $textSend = "เข้าใจละ"; break;
							case 3 : $textSend = "รับทราบบบบ"; break;
						}
					}
					else if(strpos($text,'ขำไร')!==FALSE || strpos($text,'ขำอะไร')!==FALSE || strpos($text,'ขำราย')!==FALSE || strpos($text,'ขำอาราย')!==FALSE || strpos($text,'ขำรัย')!==FALSE || strpos($text,'ขำอะราย')!==FALSE || strpos($text,'ขำอะรัย')!==FALSE || strpos($text,'ขามราย')!==FALSE){
						$random = rand(1,4);
						switch($random){
							case 1 : $textSend = "ขำเธอไง"; break;
							case 2 : $textSend = "ก็อยากขำอะ 555"; break;
							case 3 : $textSend = "ฮุ่ๆๆ ไม่บอก"; break;
							case 4 : $textSend = "คนมันเส้นตื้น อิอิ"; break;
							case 5 : $textSend = "ก็เธอเป็นคนตลกอะ 555"; break;
						}
					}
					else if(strpos($text,'พิมพ์ไว')!==FALSE || strpos($text,'พิมไว')!==FALSE || strpos($text,'พิมเร็ว')!==FALSE || strpos($text,'พิมพ์เร็ว')!==FALSE){
						$random = rand(1,3);
						switch($random){
							case 1 : $textSend = "ผมคือเดอะ แฟลช"; break;
							case 2 : $textSend = "แน่นอนคับ ผมฝึกทุกวัน"; break;
							case 3 : $textSend = "คนเก่งก็แบบนี้แหละ อิอิ"; break;
						}
					}
					else if(strpos($text,'ใบ่หรอ')!==FALSE || strpos($text,'จิงดิ')!==FALSE || strpos($text,'จิงหรอ')!==FALSE || strpos($text,'จิงหยอ')!==FALSE || strpos($text,'ใบ่หยอ')!==FALSE){
						$textSend = "เยสสส";
					}
					else if(strpos($text,'รู้จักไหม')!==FALSE || strpos($text,'รู้จักมั้ย')!==FALSE){
						$textSend = "ไม่รู้จักกก";
					}
					else if(strpos($text,'ไม่บอก')!==FALSE || strpos($text,'ไมบอก')!==FALSE){
						$textSend = "ก็แล้วแต่นะ";
					}
					else if(strpos($text,'รู้ไหม')!==FALSE || strpos($text,'รู้มั้ย')!==FALSE || strpos($text,'รุ้ไหม')!==FALSE || strpos($text,'รุ้มั้ย')!==FALSE){
						if(strlen($text) >= 18 && strlen($text) <= 30){
							$random = rand(1,5);
							switch($random){
								case 1 : $textSend = "รู้อะไรอะ"; break;
								case 2 : $textSend = "ไม่รู้"; break;
								case 3 : $textSend = "รู้อะไรหยออ ??"; break;
								case 4 : $textSend = "ไม่รู้ววววว"; break;
								case 5 : $textSend = "ไม่อยากรู้เลย"; break;
							}
						}
						else{
							$random = rand(1,5);
							switch($random){
								case 1 : $textSend = "สุดยอดดดดดด"; break;
								case 2 : $textSend = "โอ้วโห้ววววววว"; break;
								case 3 : $textSend = "Yes เซออออ"; break;
								case 4 : $textSend = "โอเครครับผม"; break;
								case 5 : $textSend = "เฟี้ยววสุดๆไปเลย"; break;
							}
						}
					}
					else if(strpos($text,'study')!==FALSE || strpos($text,'เรียน')!==FALSE){
						$textSend = "เรียนที่ Thammasat University";
					}
					else if(strpos($text,'อิอิ')!==FALSE){
						$textSend = "55555";
					}
					else if(strpos($text,'อยาก')!==FALSE){
						if(strpos($text,'นอน')!==FALSE){
							$textSend = "นอนสิ";
						}
						else if(strpos($text,'บักว่าว')!==FALSE){
							$textSend = "เข้าห้องน้ำเลย";
						}
						else{
							$textSend = "อยากอะไรหยออ";
						}
					}
					else if(strpos($text,'live')!==FALSE){
						$textSend = "On the cloud";
					}
					else if(strpos($text,'favorite')!==FALSE && strpos($text,'food')!==FALSE){
						$textSend = "I can't eat food";
					}
					else if(strpos($text,'ok')!==FALSE){
						$textSend = "OKay";
					}
					else if(strpos($text,'สวัสดี')!==FALSE || strpos($text,'หวัดดี')!==FALSE){
						$textSend = "สวัสดีครับผม";
					}
					else if(strpos($text,"เค")!==FALSE){
						$textSend = "เคครับ";
					}
					else if(strpos($text,'รู้แล้ว')!==FALSE || strpos($text,'รุ้แล้ว')!==FALSE || strpos($text,'รุ้วแล้ว')!==FALSE){
						$textSend = "โอเค";
					}
					else if(strpos($text,'รุ้ยัง')!==FALSE || strpos($text,'รู้ยัง')!==FALSE){
						$textSend = "ยังไม่รู้วววว";
					}
					else if(strpos($text,'เหี้ย')!==FALSE || strpos($text,'ควย')!==FALSE || strpos($text,'หี')!==FALSE){
						$textSend = "พิมพ์สุภาพหน่อยครับ";
					}
					else if(strpos($text,'เหยด')!==FALSE || strpos($text,'เยด')!==FALSE || strpos($text,'เย็ด')!==FALSE || strpos($text,'เยส')!==FALSE){
						$textSend = "เยสส แน่นอน";
					}
					else if(strpos($text,'ไม่ได้ด่า')!==FALSE){
						$textSend = "รู้ละ ผมแกล้งเฉยๆ";
					}
					else if(strpos($text,'google')!==FALSE || strpos($text,'กูเกิล')!==FALSE || strpos($text,'กุเกิล')!==FALSE){
						$textSend = "อะ เอาไป www.google.com";
					}
					else if(strpos($text,'youtube')!==FALSE || strpos($text,'ยูทูป')!==FALSE || strpos($text,'ยุทุป')!==FALSE || strpos($text,'ยุทูป')!==FALSE){
						$textSend = "เชิญลิ้งนี้เลย www.youtube.com";
					}
					else if(strpos($text,'เฟส')!==FALSE || strpos($text,'เฟซ')!==FALSE || strpos($text,'facebook')!==FALSE || strpos($text,'face')!==FALSE){
						if(strpos($text,'หมี')!==FALSE || strpos($text,'ขอ')!==FALSE){
							$textSend = "หมีไม่เล่นเฟสคับ";
						}
						else{
							$textSend = "ตามนี้ www.facebook.com";
						}
					}
					else if(strpos($text,'ผลบอล')!==FALSE){
						$textSend = "เข้าเว็บนี้เลย www.livescore.com";
					}
					else if(strpos($text,'หมากรุก')!==FALSE && strpos($text,'เล่น')!==FALSE){
						$textSend = "เลือกเลย lichess.org หรืออีกอัน chess.com";
					}
					else if(strpos($text,'วาร์ป')!==FALSE || strpos($text,'วาป')!==FALSE){
						$textSend = "ตอนนี้ยานขัดข้องอยู่";
					}
					else if(strpos($text,'ภูมิ')!==FALSE || strpos($text,'พูม')!==FALSE || strpos($text,'ภูม')!==FALSE || strpos($text,'พุม')!==FALSE){
						$random = rand(1,3);
						switch($random){
							case 1 : $textSend = "ไม่อยู่"; break;
							case 2 : $textSend = "รอภูมิอ่านก่อนน"; break;
							case 3 : $textSend = "ภูมิหลับแล้วมั้ง"; break;
						}
					}
					else if(strpos($text,'เออ')!==FALSE || strpos($text,'จ้า')!==FALSE || strpos($text,'จ้ะ')!==FALSE || strpos($text,'ออ')!==FALSE || strpos($text,'อ่อ')!==FALSE || strpos($text,'อ่า')!==FALSE){
						$textSend = "จ้ะ";
					}
					else if(strpos($text,'ควาย')!==FALSE || strpos($text,'โง่')!==FALSE){
						$random = rand(1,5);
						switch($random){
							case 1 : $textSend = "เออออ ไอ..."; break;
							case 2 : $textSend = "คุณฉลาด ??"; break;
							case 3 : $textSend = "จ้า พ่อคนเก่ง"; break;
							case 4 : $textSend = "T T"; break;
							case 5 : $textSend = "จริงๆผมฉลาดนะ แต่ผมขี้เกียจพิมพ์"; break;
						}
					}
					else if(strpos($text,'โม้')!==FALSE){
						$textSend = "ผมไม่ได้โม้นะ";
					}
					else if(strpos($text,'วันนี')!==FALSE){
						$random = rand(1,3);
						switch($random){
							case 1 : $textSend = "ทำ GitHub ยัง"; break;
							case 2 : $textSend = "อากาศดีเนาะ"; break;
							case 3 : $textSend = "น่านอนจัง"; break;
						}
					}
					else if(strpos($text,'ทำแล้ว')!==FALSE || strpos($text,'ทำแล้ส')!==FALSE){
						$textSend = "รับทราบ ห้ะ";
					}
					else if(strpos($text,'ไอโฟน')!==FALSE || strpos($text,'iphone')!==FALSE){
						$textSend = "ตอนนี้มีรุ่นออกไหมแล้วนะ iPhone 8";
					}
					else if(strpos($text,'ไอ')!==FALSE || strpos($text,'อี')!==FALSE || strpos($text,'อิ')!==FALSE){
						if(strlen($text)==6){
							$textSend = "ไอเลิฟยูหรอ";
						}
						else{
							$random = rand(1,3);
							switch($random){
								case 1 : $textSend = "อย่าด่าผมเลย T T"; break;
								case 2 : $textSend = "olo"; break;
								case 3 : $textSend = "โหดจังง"; break;
							}
						}
					}
					else if(strpos($text,'ไอสัส')!==FALSE || strpos($text,'สัส')!==FALSE || strpos($text,'สัตว์')!==FALSE || strpos($text,สัต)!==FALSE){
						$textSend = "ผมเป็นสัตว์น่ารักที่เรียกว่าหมี";
					}
					else if(strpos($text,'อืม')!==FALSE){
						$textSend = "ไม่ชอบเลยคำนี้ มันสั้นไป";
					}
					else if(strpos($text,'บอบ')!==FALSE && strpos($text,'แบบ')!==FALSE){
						$textSend = "ใช่ๆ แบบนั้นเลย";
					}
					else if(strpos($text,'ทีมเก่ง')!==FALSE || strpos($text,'ทีมที่เก่ง')!==FALSE || (strpos($text,'ทีม')!==FALSE && strpos($text,'เก่ง')!==FALSE)){
						if(strpos($text,'น้อย')!==FALSE || strpos($text,'กาก')!==FALSE){
							$textSend = "บาซ่าไง";
						}else{
							$textSend = "เรอัลมาดริด แชมป์ยุโรป 12 สมัย เก่งสุด";
						}
					}
					else if(strpos($text,'ฉลาด')!==FALSE && strpos($text,'กว่า')!==FALSE){
						$textSend = "จิงหรออจ้ะ";
					}
					else if(strpos($text,'น้ำลุง')!==FALSE || strpos($text,'ร้านน้ำ')!==FALSE){
						$random = rand(1,5);
						switch($random){
							case 1 : $textSend = "ขอชาเย็น 1"; break;
							case 2 : $textSend = "ขอชาเขียว 1"; break;
							case 3 : $textSend = "ขอนมเย็น 2"; break;
							case 4 : $textSend = "ขอโอเลี้ยง 3"; break;
							case 5 : $textSend = "ขอข้าวผัดกระเพราหมู 2 กล่องครับ"; break;
						}
					}
					else if(strpos($text,'ได้')!==FALSE){
						$textSend = "เคๆๆ";
					}
					else if(strpos($text,'นอนตอนไหน')!==FALSE || strpos($text,'นอนตอนกี่โมง')!==FALSE || strpos($text,'นอนกี่โมง')!==FALSE || strpos($text,'นอนเมื่อไร')!==FALSE){
						$textSend = "ผมไม่เคยนอนน 555";
					}
					else if(strpos($text,'นอนละ')!==FALSE || strpos($text,'นอนแล้ว')!==FALSE || strpos($text,'นอนแล้ส')!==FALSE){
						$random = rand(1,5);
						switch($random){
							case 1 : $textSend = "ฝันดีผีจับตูด"; break;
							case 2 : $textSend = "ฝันดีนะ จุ๊บๆๆ"; break;
							case 3 : $textSend = "ราตรีสวัสดิ์"; break;
							case 4 : $textSend = "อย่าลืมตื่นมาเรียนละ"; break;
							case 5 : $textSend = "เราก็ง่วงละ เจอกันนะ"; break;
						}
					}
					else if(strpos($text,'เจอกัน')!==FALSE){
						$textSend = "เจอกันๆๆๆ";
					}
					else if(strpos($text,'บาย')!==FALSE || strpos($text,'bye')!==FALSE || strpos($text,'บ๋าย')!==FALSE){
						$textSend = "บายยยยย";
					}
					else{
						$random = rand(6,7);
						switch($random){
							case 1 : $textSend = "I don't understand"; break;
							case 2 : $textSend = "ผมไม่เข้าใจ"; break;
							case 3 : $textSend = "อ่าหะ"; break;
							case 4 : $textSend = "ไม่รู้เรื่องเลยๆ"; break;
							case 5 : $textSend = "..."; break;
							case 6 : $textSend = $text." คืออะไรหว่า"; break;
							case 7 : $textSend = "ผมไม่รู้ว่า ".$text." มันคืออะไร"; break;
							case 8 : $textSend = "เอาตรงๆนะ ไม่รู้เรื่องเลยหวะ"; break;
							case 9 : $textSend = "ตอนนี้ง่วงละ นอนดีกว่า"; break;
							default : $textSend = $text." ???";
						}
					}

					$this->sendMessage($textSend,$replyToken);
					break;
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
