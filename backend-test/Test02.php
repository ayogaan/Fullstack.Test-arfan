<?php
/**
 * Problem
 * 
 * andri harus melewati gang sempit dan tidak bisa memutar. gang itu lebar nya
 * hanya 60 cm, dan dilapisi dengan ubin 60 cm x 60cm. melihat hal itu jiwa
 * jiwa engklek andri bergetar dan ingin melompati tiap ubin tersebut. sayang
 * di gang tersebut banyak anjing berkeliaran dan suka pup sembarangan. misal
 * misal andri maksimal bisa melompati dua ubin sekaligus, berapa kali minimal
 * andri harus lompat untuk melewati gang tersebut tanpa menginjak pup.
 *
 * misal $data berisi kondisi dari masing2 ubin. jika 0 maka aman dan jika 1
 * berarti ada pup nya, lengkapi fungsi howManyJump berikut.
 * 
 * contoh:
 * $data = [0, 0, 0, 0, 1, 0, 0];
 * - ubin pertama bisa lompat 2 ubin
 * - ubin ketiga tidak bisa lompat 2 ubin karena berarti akan menginjak pup
 * - ubin keempat harus lompat 2 ubin agar tidak menginjak pup
 * - ubin keenam hanya bisa lompat 1 ubin karena itu ubin terakhir
 * berarti jika datanya seperti itu, return nya adalah 4.
 */

 # posisi sama dengan array 0
 # posisi + 2 cek != 1 maka lompat 


function howManyJump ($data)
{
  $jump = 0;
	for($x = 0; $x <= count($data); $x++) {
  if($x+2>count($data)){
    return $jump;
  }
 
  if($data[$x+2]==0){
    $x++;
  }
  $jump++;
  }
  
	return $jump;
}

/* --------- bagian bawah ini tidak perlu diedit --------- */
$data = json_decode(gzinflate(base64_decode('vZ1dcuNIDIPvss95iDP5PUsq97/GVtrZSrJ
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')));

$correct = 0;
foreach ($data as $v)
{
	
	$ans = howManyJump($v[1]);
	if ($ans == $v[0]) ++$correct;
	
}


echo $correct."/".count($data);


