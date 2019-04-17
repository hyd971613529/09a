<?php 	
error_reporting(0);
/*
**$a 起始值 $b 终点值
*/
function calFn($a,$b){
	for ($i=$a; $i <=$b; $i++) {
		//拼接循环的值 
		$str.=$i;
	}
	// 查找字符串 返回
	$cs=substr_count($str,'1');
	return $cs;
}

echo calFn(1,13);


?>