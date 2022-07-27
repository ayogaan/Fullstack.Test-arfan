<?php
/**
 * Problem 01
 * 
 * ardhi dan irvan bersaing di sekolahnya. mereka menentukan siapa yang terbaik di setiap
 * akhir ujian. mereka menentukan tidak dari jumlah nilai mereka, tetapi dari jumlah
 * mata pelajaran dimana mendapat nilai tertinggi. misal $ardhi berisi list nilai ardhi dan
 * $irvan berisi list nilai irvan, carilah siapa yang terbaik dari mereka.
 *
 * jika ardhi lebih banyak, maka return 'ardhi', jika irvan 'irvan', jika sama 'none'.
 * 
 * misal:
 * $ardhi = [7,9,10,8,9]
 * $irvan = [8,7,10,10,8]
 *
 * ardhi menang di 2 mata pelajaran
 * irvan menang di 2 mata pelajaran
 * karena sama, maka jawabannya 'none'.
 */

function theWinnerIs ($ardhi, $irvan)
{
  $winner = [0,0,0];
	$len = count($ardhi);
	for($x=0; $x<$len; $x++){
		if($ardhi[$x]>$irvan[$x]){
			$winner[0]+=1;
		}else if($ardhi[$x]<$irvan[$x]){
			$winner[1]+=1;
		}else{
			$winner[2]+=1;
		}
	}
	$win = max($winner);
	$key = array_search($win, $winner);
	
	if($key==0){
	  return "ardhi";  
	}
	
	if($key==1){
	  return "irvan";
	}
	
	if($key==2){
	  return "none";
	}
   
}

/**
 * Problem 02
 * 
 * untuk array $arr, carilah selisih tertinggi di antara dua digit angka
 * dari anggota array tersebut.
 * 
 * misal:
 * $arr = [4,9,1,7]
 *
 * maka:
 * |4 - 9| = 5
 * |4 - 1| = 3
 * |4 - 7| = 3
 * |9 - 1| = 8
 * |9 - 7| = 2
 * |1 - 7| = 6
 *
 * dari semua selisih tersebut yg paling besar adalah 8, maka jawabannya adalah 8.
 * 
 */

function maxDifference ($arr)
{
	return max($arr)- min($arr); //???
}

/**
 * Problem 03
 * 
 * carilah bilangan yang nilai akar kuadratnya bulat di antara $min dan $max inclusive.
 * 
 * misal:
 * $min = 1
 * $max = 10
 *
 * maka:
 * √1 = 1
 * √2 = 1.4142135623731
 * √3 = 1.7320508075689
 * √4 = 2
 * √5 = 2.2360679774998
 * √6 = 2.4494897427832
 * √7 = 2.6457513110646
 * √8 = 2.8284271247462
 * √9 = 3
 * √10 = 3.1622776601684
 * 
 * dari list tersebut hanya 1, 4, dan 9 yang akar kuadratnya bulat, maka jawabannya adalah 3.
 */

function squareRoot($max, $min)
{
    $m = 0;
    for($min; $min<=$max; $min++){
        $res = sqrt($min);
        
            if(fmod($res*100,10) == 0){
            if($res>$m){
                
                $m=$res;
            }
            
        }
    }
    
    print($m); 
}

/* --------- bagian bawah ini tidak perlu diedit --------- */
$data = json_decode(gzinflate(base64_decode('fX25jmzJkty/tHyE2BfKVKiOMsJFCQ9kD+Y
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')));

foreach ($data as $func => $data)
{
  print($func);
	$correct = 0;
	foreach ($data as $v)
	{
		$ans = array_shift($v);
		
		if ($ans == call_user_func_array($func,$v))
			++$correct;
	}
	echo $correct."/".count($data)."\n";
}
