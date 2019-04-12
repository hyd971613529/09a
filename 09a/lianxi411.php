<?php 
error_reporting(0);

//水仙花
function sxh(){
	for ($i = 1; $i <= 9; $i++) { 
		for ($j = 0; $j <= 9 ; $j++) { 
			for ($x = 0; $x <= 9; $x++) { 
				if ($i*$i*$i+$j*$j*$j+$x*$x*$x==$i*100+$j*10+$x) {
					echo "$i$j$x"."<br>";
				}
			}
		}
	}
}
echo sxh();
echo "<hr>";


// 数组求和
$arr = [];
for ($i = 0; $i <=100 ; $i++) { 
	$arr[$i] = $i;
}
$arr = array_sum($arr);
print_r($arr);
echo "<hr>";



// 循环+=求和
for ($i=0; $i <=100 ; $i++) { 
	$sum +=$i;
}
echo "$sum";
echo "<hr>";



// 递归求和
function sum($n){
    if($n>1){
        return $n+sum($n-1);
    }else{
        return 1;
    }
}
echo sum(100);
echo "<hr>";



// 判断回文
function hw($str){
	// 字符串反转
    $hw = strrev($str);
	if($hw==$str){
		echo "是回文";
	}else{
		echo "不是回文";
	}
}
$str  = 'abba';
hw($str);
echo "<hr>";



 ?>