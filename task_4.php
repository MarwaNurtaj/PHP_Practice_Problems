<?php
function selection_sort_desc(&$arr, $n)  
{ 
for($i = 0; $i < $n ; $i++) 
{ 
$low = $i; 
for($j = $i + 1; $j < $n ; $j++) 
{ 
if ($arr[$j] > $arr[$low]) 
{ 
$low = $j; 
} 
} 

if ($arr[$i] < $arr[$low]) 
{ 
$tmp = $arr[$i];            // swap the minimum value to $ith node 
$arr[$i] = $arr[$low]; 
$arr[$low] = $tmp; 
} 
} 
} 

$n=5;
$arr = array();

array_push($arr,1);
array_push($arr,2);
array_push($arr,3);
array_push($arr,4);
array_push($arr,5);
array_push($arr,6);
array_push($arr,7);
array_push($arr,8);
array_push($arr,9);
array_push($arr,10);

$len = count($arr); 
selection_sort_desc($arr, $len); 

echo "Sorted array : \n";  

for ($i = 0; $i < $len; $i++)  
echo $arr[$i] . " ";  

?>