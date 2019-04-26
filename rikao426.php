<?php 

function aa($arr,$n){
	$len = count($arr);
	for ($i=0; $i < $len; $i++) { 
		for ($j=0; $j < $len; $j++) { 
			if ($arr[$i]+$arr[$j]==$n) {
				// echo "$arr[$i]+$arr[$j]";
				$str[]=$arr[$i]*$arr[$j];
			}
		}
	}
	return $str[0];

}
$arr = [1,3,4,6,7,8,9];
print_r(aa($arr,7));





?>