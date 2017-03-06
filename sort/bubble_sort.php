<?php

// 冒泡排序。每一趟排序，就位一个元素，
//复杂度为o(n*n)  有点偏高

//从小到大排序,一个元素就位,从后向前比较
function bubble_sort_one($arr){
	$len = count($arr);
	for($i=1; $i<$len; $i++)//最多做n-1趟排序
	{
		$flag = false;    //本趟排序开始前，交换标志应为假
		for($j=$len-1;$j>=$i;$j--) //从后向前，进行对比交换  $j>=$i  第$i趟,已经有$i个元素就位了，只需要再比较$i以后的元素
		{
			if($arr[$j]<$arr[$j-1])//交换记录
			{
				//如果是从大到小的话，只要在这里的判断改成if($arr[$j]>$arr[$j-1])就可以了
				 $x=$arr[$j];
				 $arr[$j]=$arr[$j-1];
				 $arr[$j-1]=$x;
				 $flag = true;//发生了交换，故将交换标志置为真
			}
		}
		if(! $flag)//本趟排序未发生交换，提前终止算法
		return $arr;   
	}
}

//从前向后比较  从大到小排序
function bubble_sort_two($arr){
	$len = count($arr);

	for($i=1;$i<$len;$i++){
		$flag = false;
		for($j=1;$j<=($len-$i);$j++){  //从第一位开始比较
			if($arr[$j]>$arr[$j-1]){
				$x = $arr[$j-1];
				$arr[$j-1] = $arr[$j];
				$arr[$j] = $x;
				$flag = true;//发生了交换，故将交换标志置为真
			}
		}
		if(!$flag){
			return $arr;  ////本趟排序未发生交换，提前终止算法
		}
	}
}

// $arr = array(1,3,6,89,4,45,67,12,65,23);
// print_r(bubble_sort_one($arr));
// echo '<br/>';
// print_r(bubble_sort_two($arr));