<!-- Write a PHP program to print all negative elements in an array. -->
<?php
$arr= [10,20,30,40,55,60,77,44,22];
$min_val=9999;

for($i=0; $i<count($arr); $i++){
    if($arr[$i]< $min_val){
        $min_val = $arr[$i];
    }
}
echo $min_val;

?>