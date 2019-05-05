<?php 
// 问题代码
function efcz($arr,$n){
	$len=count($arr);
	$zjz = floor($len/2);
	for ($i=0; $i < $zjz; $i++) { 
		if ($arr[$i]==$n) {
			return $arr[$i];
		}
		unset($arr[$i]);
	}
	efcz($arr,$n);
}

$arr= [1,2,3,4,5,6,7];

print_r(efcz($arr,5));


?>