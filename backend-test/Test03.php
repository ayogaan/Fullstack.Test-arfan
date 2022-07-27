<?php
/**
 * Problem 01
 * 
 * untuk input $n, buat lah segitiga sama kaki dengan tinggi $n dan alas $n.
 * 
 * contoh:
 * apabila $n = 3, maka
 * $str  = "  #\n";
 * $str .= " ##\n";
 * $str .= "###\n";
 * 
 * note:
 * - gunakan \n untuk memasukan baris baru
 * - sisi siku ada di sebelah kanan
 * - karenanya panjang $str haruslah $n * $n + $n
 */

function triangles ($n)
{
	return $str; //???
}

/**
 * Problem 02
 * 
 * misal ada string dengan panjang tak terhingga yang merupakan perulangan string $s,
 * hitunglah banyak huruf a dalam $n huruf pertama dari string tersebut.
 * 
 * contoh:
 * $s = 'jarangoyang';
 * $n = 17;
 *
 * maka:
 * $str = 'jarangoyang'.'jarang';
 * berarti jumlah huruf a adalah 5
 */

function howManyAs ($s, $n)
{
    return 0; // ???
}

/* --------- bagian bawah ini tidak perlu diedit --------- */
$data = json_decode(gzinflate(base64_decode('7V1JciM5EvyKjLjyUGJJqurjPGBeUNMHcEmSydX
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
/suWRXY5sbGQvI9sX2bHIJkX2JbIVkd2HbDhkjyHbCtlJyOZB9guyRZBdgWwEJPeTdC/fj1M9ybPIedPumsl
U/SuTdf7qI7w+wOvjuz6866O7PrjrY7s+tOsjuz6w6+O6Pqzro7o+qOtjuj6k6yO6PqDr47k+nOujuT6Y62O
5PpTrI7k+kOvjuD6M66O4PojrY7g+hOsjuD6A6+O3Pnzro7c+eOtjtz506yO3PnDr47Y+bOujtj5o62N2/1R
29eHE8hn/TfkDe5sm3/7sd3UFQF4ccs7LrfEebvnUZD7ndtWBbu/hVgN8uyjv8pYvTr/FO35pckdSOpLIkfS
NJG0kVSMJGknLSDJGUjCSeJF0iyRZJLUiCRVJo0jyRFImkiiR9IgkRSQVIgkQSXtIskNSHJLYkHSGJDEkdSE
JC0lTSHJCUhKSiJD0gyQdJNUgCQZJK0gy4W///d3+Ea15267W6yY04IfnPzjfwfkNzmew/4P9HezfYH8Gv//
g9+sfPqk+UzYrV3/sNrl/jb2o2ax/BK3pJMx+bXxgrSx30ueUN6vl+O8l9XcY5Pa4aIqT9f6PuUnltb8vJed
ms2zv9w3XkvCcF+f2sLndKfVVC08211RrTTXWVFtNNdVUS0011FQ7TTXTVCtNNdJUG0010VQLTTXQVPtMNc9
U60w1zlTbTDXNVMtMNcxUu0w1y1SrTDXKVJtMNclUi0w1yFR7TDXHVGtMNcZUW0w1xVRLTDXEVDtMNcNUK0w
1wlQbTDXBepVb21Q/LzovH0/9PZevY5233x/zoc2HcjPY738B')));

$correct = 0;
foreach ($data as $v)
{
	$func = array_shift($v);
	$ans = array_shift($v);
	if ($ans == call_user_func_array($func,$v))
		++$correct;
}

echo $correct."/".count($data);