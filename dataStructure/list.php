<?php
//把队列中的第一个元素删除，把第二个放到队列的末尾；第三个删除，第四个放到末尾，
//以此类推，最终按顺序返回，删除的元素
function list_example($arr){
	$res = array();

	$n = count($arr);
	for($i=0;$i<$n;$i++){
		$res[] = $arr[2*$i];
		unset ($arr[2*$i]);
		if(array_key_exists(2*$i+1,$arr)){
			$arr[] = $arr[2*$i+1];
		}
	}
	return $res;
}

$arr1 = array(6,3,1,7,5,8,9,2,4);
$ret = list_example($arr1);
print_r($ret);
?>