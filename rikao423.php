<?php 	

function ReverseSentence($str){
	// 通过空格来分割成数组
	$arr = explode(' ',$str);
	// 通过数组反转的函数来执行
	$arr = array_reverse($arr);
	// 通过空格来将数组转化字符串
	$str = implode(' ',$arr);
	// 返回反转成功能的字符串
	return $str;

}

$str = 'student. a am I';
echo ReverseSentence($str);


?>