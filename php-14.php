<!-- Write a PHP program to find maximum and minimum element in an array. – using recursion. -->
<?php
$arr= [10,20,30,40,55,60,77,44,22];
$min_val=9999;
$max_val=-9999;

for($i=0; $i<count($arr); $i++){
    if($arr[$i]< $min_val){
        $min_val = $arr[$i];
    }

    if($arr[$i]>$max_val){
        $max_val = $arr[$i];
    }
}
echo $min_val .'<br>'. $max_val;  

?>