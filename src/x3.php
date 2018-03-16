<?php
# Command Line

	if($pesan_datang=='ui')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => '<p>&forall;</p>'
									)
							)
						);
				
	}
	else
	if($pesan_datang=='gc/db')
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
	if($pesan_datang=='servtime')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Server : '.date("j F, Y, g:i a").'
'.date("B u, e, T, Z, c")
									)
							)
						);
				
	}
	else
	if($pesan_datang=='arif')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Arif, orangnya biasa, Jombs, suka bangat buku kambing conge
'
									)
							)
						);
				
	}
	else
	if($pesan_datang=='septian')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => ''.$pesan_datang.', Belum ada deskripsi
'
									)
							)
						);
				
	}
	else
	if($pesan_datang=='xc')
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
