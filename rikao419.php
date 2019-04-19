<?php 	

function a($n,$m){
	
	$list = range(1,$n);
	$num = 1;
	// print_r($list);
	foreach ($list as $key => $value) {
	
		if ($m==$num) {
			unset($list[$key]);
			$num == 1;
			// print_r($list);
			continue;
		}
		$num++;
	}
	return $list;

}


print_r(a(10,7));


 ?>