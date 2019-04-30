<?php 	
function NumberOf1($n){
	// 通过函数转换二进制数字
	$str = decbin($n);
	// 通过字符串出现的次数  函数   获取出现了几次
	$a = substr_count($str,1);
	// 输出结果
	return $a;
}

echo NumberOf1(10);


 ?>