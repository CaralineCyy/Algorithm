<?php
function stack($arr){
	$mid = count($arr)/2-1;

	$com_arr_one = array();
	for($i=$mid;$i>=0;$i--){
		$com_arr_one[] = $arr[$i];
	}

	$com_arr_two = array_slice($arr, -($mid+1));

	if(array_values($com_arr_one)==array_values($com_arr_two)){
		return "true";
	}else{
		return "false";
	}
}

$arr1 = array('a','b','c','h','v','b','a');
$arr2 = array('a','b','b','a');
echo stack($arr1);
echo "<br/>";
echo stack($arr2);
?>