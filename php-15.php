<!-- Write a PHP program to find second largest element in an array. -->
<?php
$arr= [5,3,4,6,7,9,3];



for($i=0; $i<2; $i++){
    $max_val=0;
    for($j=0; $j<count($arr); $j++){
        if($arr[$j]> $max_val){            
            $max_val= $arr[$j];   
            $idx= $j;    
        }             
    }
    $arr[$idx]= 0;
}

echo $max_val;


?>