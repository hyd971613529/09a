<?php 	
error_reporting(0);
function GetUglyNumber_Solution($num){

	$shu=$num;
	while ($num%2 == 0) {
		$num = $num/2;
	}

	while ($num%3 == 0) {
		$num = $num/3;
	}
	while ($num%5 == 0) {
		$num = $num/5;
	}
	

	if ($num == 1) {
		echo $shu."是丑数";
	}else{
		echo $shu."不是丑数";
	}



}

GetUglyNumber_Solution(8);



?>