<?php
function insert_data($data,$arr){
	require "../sort/bubble_sort.php";
	$sortarr1 = bubble_sort_one($arr);

	$res = array();

	for($i=0;$i<count($sortarr1);$i++){
		if($sortarr1[$i]<$data && $sortarr1[$i+1]>=$data){
			$res[] = $data;
		}else{
			$res[] = $sortarr1[$i];
		}
	}
	return $res;
}

$arr1 = array(23,454,23,67,8,4,90,34,5);
$da = 7;
print_r(insert_data($da,$arr1));

?>