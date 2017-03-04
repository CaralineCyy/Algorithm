<?php
//木桶排序,如果需要对0~1000的整数进行排序，则需要1001个桶
//弊端：(1)只能比较整数;
//      (2)非常浪费空间，如果我要比较0~100000000中的5个数字，但是还是要有100000001个桶

function barrel_sort($arr){
	$arr_barr = array();
	for($i=0;$i<=1000;$i++){
		$arr_barr[] = 0;
	}

	foreach($arr as $v){
		$arr_barr[$v]++;
	}

	$result = array();
	for($i=0;$i<count($arr_barr);$i++){
		for($j=0;$j<$arr_barr[$i];$j++){
			$result[] = $i;
		}
	}
	return $result;
}

$arr = array(1,4,90,3,78,56,899,0,999,1000);
$result = barrel_sort($arr);
print_r($result);








?>