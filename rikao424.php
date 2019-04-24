<?php 	
// 传入一个数到方法内求和
function Sum_Solution($n){
	// 通过递归求和
	$n && ( $n += Sum_Solution( $n - 1) );
	// 返回递归求和的参数
	return $n;
}
// 输出
echo Sum_Solution(5);

 ?>