<?php
function kitten_fish($arr1,$arr2){
	$stack = array();
	while(count($arr1)>0 && count($arr2)>0){
		$stack = array_values($stack);
		$tmp1 = array_shift($arr1);
		if(in_array($tmp1, $stack)){
			$index = array_search($tmp1, $stack);
			$sub_arr = array_slice($stack, $index);
			$sub_arr[] = $tmp1;
			//入队
			for($i=0;$i<count($sub_arr);$i++){
				$arr1[] = $sub_arr[$i];
			}
			//出栈
			for($i=$index;$i<count($stack);$i++){
				unset($stack[$index]);
			}
		}else{
			array_push($stack, $tmp1);
		}

		$tmp2 = array_shift($arr2);
		if(in_array($tmp2, $stack)){
			$index = array_search($tmp2, $stack);
			$sub_arr = array_slice($stack, $index);
			$sub_arr[] = $tmp2;
			//入队
			for($i=0;$i<count($sub_arr);$i++){
				$arr1[] = $sub_arr[$i];
			}
			//出栈
			for($i=$index;$i<count($stack);$i++){
				unset($stack[$index]);
			}
		}else{
			array_push($stack, $tmp2);
		}

	}

		if(count($arr1)==0){
			echo "1:fail 2:success";
			echo '<br/>';
			print_r($arr2);
			echo '<br/>';
			print_r($stack);
		}else{
			echo "2:fail 1:success";
			echo '<br/>';
			print_r($arr1);
			echo '<br/>';
			print_r($stack);
		}
	
}

$arr1 = array(2,4,1,2,5,6);
$arr2 = array(3,1,3,5,6,4);
kitten_fish($arr1,$arr2);

?>