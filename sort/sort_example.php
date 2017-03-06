<?php
function sort_distinct($arr){
	$res = array_unique($arr);   //array_unique去重会保留第一个的键值
	echo count(array_values($res)); //取出数组中的所有的值，返回一个数组，重新取键值了
	echo "<br/>";
	
	require "./bubble_sort.php";
	print_r(bubble_sort_one(array_values($res)));
} 

$arr1 = array(12,12,34,35,98,76,34,67,10,98);
sort_distinct($arr1);
?>