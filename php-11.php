<!-- Write a PHP program to read and print elements of array. – using recursion. -->
<?php   
$arr = ['a','b','c','d','d'];
$i=0;

function read_element($arr, $i){
    echo $arr[$i];
    $i++;
    if($arr[$i]!=false){
        read_element($arr, $i);        
    }
}

read_element($arr, $i);

?>