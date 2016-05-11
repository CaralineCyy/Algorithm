<?php

// 冒泡排序

function bubble_sort($arr){
	$len = count($arr);
	for($i=1; $i<$len; $i++)//最多做n-1趟排序
	{
		$flag = false;    //本趟排序开始前，交换标志应为假
		for($j=$len-1;$j>=$i;$j--)
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

$arr = array(1,3,6,89,4,45,67,12,65,23);
print_r(bubble_sort($arr));