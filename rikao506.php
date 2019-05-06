<?php 
function CountSteps($x,$y){
	$n= $x*$y;

	
	$arr[1]=$arr[2]=1;
	for ($i=3; $i < $n; $i++) { 
		$arr[$i]=$arr[$i-1]+$arr[$i-2]+$arr[$i-3]; 
	}
	print_r($arr);
}

CountSteps(5,2);



?>