<?php 		

function Find($array,$num){

	foreach ( $array as $key => $value ) {

		for ($i=0; $i < 4; $i++) { 

			if ( $value[$i] == $num ) {

				return true;
			}
		}
	}
	return false;
}


$array = [
	[1,2,8,9],
	[2,4,9,12],
	[4,7,10,13],
	[6,8,11,15]
];
$num = 111;
print_r( Find( $array,$num ) );
?>