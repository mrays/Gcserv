<?php
# Command Line

	if($command=='gc')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Anggota Greencore ! :
1. Alan    (PM)
2. Arif     (PM)
3. Dewa    (BC)
4. Fadhil   (BC)
5. Ikhwal  (AP)
6. Nauval  (PM)
7. Rangga (PM)
8. Salman (AK)
9. Septian (PM)
'
									)
							)
						);
				
	}
	else
	if($command=='gc/db')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Anggota Greencore ! :
1. Alan    (PM)
2. Arif      (PM)
3. Dewa    (BC)
4. Fadhil   (BC)
5. Ikhwal  (AP)
6. Nauval  (PM)
7. Rangga (PM)
8. Salman (AK)
9. Septian (PM)

Anggota Baru :
1.
2.
3.
...
'
									)
							)
						);
				
	
	}
        else
	if($command=='alan')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => ''.$command.', Orangnya pendiem, saking diemnya sampe tidur mulu dikelas, banyak ciwainya, suaranya kaya kambing pengen ka***n, Gans
'
									)
							)
						);
				
	}
	else
	if($command=='arif')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => ''.$command.', Orangnya biasa, ya biasa aja, udah gitu aja ya.. kepo? Tanya aja seorangnya. Sekian...
'
									)
							)
						);
				
	}
	else
	if($command=='dewa')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => ''.$command.', orangnya baik, osis, suka WOTA, bendahara kami, masih lurus otaknya, kadang juga fk jelas kwkwkw...
'
									)
							)
						);
				
	}
	else
	if($command=='fadhil')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => ''.$command.', orangnya baik, gans, banyak yang bilang orangnya gk punya gairah hidup, suka ngelawak, tapi jatohnya krik, kadang suka gadanta, kyk orang kesambet. Sekian...
'
									)
							)
						);
				
	}
	else
	if($command=='ikhwal')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Ikhwal, anaknya baek, suka sama si s***, tapi sian bangat gk direspon sama dia, kalem tapi petakilan, kadang sikapnya gadanta, seneng bangat ama buku kambing conge
'
									)
							)
						);
				
	}
	else
	if($command=='nauval')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => ''.$command.' Orangnya tengil, pen bat digeplak sendal, banyak cewenya, pengen hijrah tapi gk bisa-bisa, katanya mau menjaga tapi diembat juga (si sanu), muna-muna kek kucing, baik, asik , orangnya seru. Sekian...'
									)
							)
						);
				
	}
	else
	if($command=='rangga')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => ''.$command.' Orangnya baik, masalah cewe ia off, ini panutan kami, mantap dah, seneng WOTA, semoga istiqomah dijalan-Nya, darah tinggian. Sekian...
'
									)
							)
						);
				
	}
	else
	if($command=='salman')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => ''.$command.', Kapten kami, kece, kepean, gans, agen FBI, sama team American World Police widiiww, suka bikin cerita anggota wat-watpad club. Sekian...
'
									)
							)
						);
				
	}
	else
	if($command=='septian')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => ''.$command.', Orangnya gans, terkece, hacker internasional, doi perjuangan si I***, maunya dikejar bukan mengejar, solid iya, darah tinggian, muntungan, Sekian...
'
									)
							)
						);
				
	}
	else
	if($command=='xc')
	{
						
		$push = array(
							'to' => 'Ub7432ba955730827b36f752bb15af71f',
				'timestamp' => '1512757840',
								'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Pesan ini antspace.gq'
									)
							)
						);
						
		
		$client->pushMessage($push);
				
	}

$result =  json_encode($balas);
//$result = ob_get_clean();

file_put_contents('./balasan.json',$result);


$client->replyMessage($balas);
