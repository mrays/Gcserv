<?php
# Command Line

	if($command=='.visimisi')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => '
GREENCORE Club

Visi : Mensejahterahkan anggota dengan semangat kompetitif, kreativitas dan inovatif

Misi : 
# Meningkatkan akhlakul karimah pada setiap anggota
# Menciptakan suasana kekeluargaan
# Menjunjung kepentingan bersama
# Menumbuhkembangkan semangat kewirausahaan
'
									)
							)
						);
				
	}
	else
	if($command=='.strukturgc')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => '
### Struktur Anggota Greencore ###

1. Penasehat : Salman Al Farisi, Arif Yogi, Naufal Aqsha
2. Sekretaris : Ikhwal Erdiansyah
3. Bendahara : Dewa Ramdhani
4. Kader : Fadhil Rizqi, Rangga
5. Divisi Kwh : Septian
6. Divisi Kegiatan : Alan
'
									)
							)
						);
				
	}
	else
	if($command=='.kpg')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'KITAB PERATURAN GREENCORE (KPG)

Ketentuan Rapat
- Setiap rapat minimal dihadiri 5 orang yang sudah ditentukan.
- Setiap anggota wajib memiliki tujuan dan wajib mengemukakan pendapat.
- Setiap rapat minimal tersedia 2 proposal yang diajukan.

Ketentuan Proposal
- Setiap pengajuan proposal minimal  proposal tersebut telah disetujui oleh sekurang-kurangnya 3 anggota.
- Proposal harus jelas dan valid
- Proposal akan diajukan dimeja rapat apabila memenuhi pernyataan diatas.

Peraturan anggota.
Pasal 1. anggota tidak memiliki keterkaitan 
antar anggota dalam lingkup anggota greencore/ tidak memiliki hubungan special.
Pasal 2. anggota setidaknya wajib berpartisipasi dalam kegiatan kwh.
Pasal 3. 
Ayat 1. setiap anggota tidak boleh saling saling menjatuhkan nama/harga diri. 
Pasal 4. setiap anggota saling menjaga kebersamaan antar anggota, bukan berarti(lihat pernyataan pasal 1)


<<<!!!  SANKSI  !!!>>>

Rapat
- Rapat akan batal jika tidak ada 5 orang yang sudah ditentukan
- Rapat dapat berjalan tanpa 5 orang apabila diberi izin oleh penasehat 
- Rapat akan batal jika memiliki kurang dari 2 proposal.

 Proposal
- Proposal akan batal jika tidak disetujui minimal 3 anggota.
- Pengecualian pengajuan proposal dilaksanakan seizin penasehat.

 Peraturan Anggota
- Jika anggota melanggar pasal 1 KPG18
maka salah satu akan dikeluarkan.
- Anggota yang tidak mengikuti kwh kena denda Rp. 500,-
- Jika anggota melanggar pasal 3 KPG18 dalam
ayat 1 menjahtuhkan nama 
maka bisa jadi akan dikeluarkan dengan proses tertentu.
- Bila melanggar pasal 4 karena modus akan diberikan sanksi berupa denda Rp. 5000,-
'
									)
							)
						);
				
	}
	else
	if($command=='.KC')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => '
 >>>>>> UTAMA <<<<<<< 
.tentanggc Tentang GC
.gc
 Anggota GC
.gc/db Database GC
.agenda Agenda GC
.kpg Peraturan GC
.visimisi Visi & Misi GC

  >>>>>> OPTIONS <<<<<<< 
#tentang
#jam
#cmedia

  >>>>>> Nama Asending <<<<<<< 
Ketik nama yang ada di daftar db GC, contoh ketika kamu mengetik "Alan" maka akan keluar kesan aku ke alan.

'
									)
							)
						);
				
	}

$result =  json_encode($balas);
//$result = ob_get_clean();

file_put_contents('./balasan.json',$result);


$client->replyMessage($balas);
