<!-- Write a PHP program to find maximum between three numbers. -->
<?php 
$a= 200;
$b= 30;
$c= 50;
if($a>$b && $a>$c){
    echo "a= ". $a . "is the maximum value"; 
}
else if($b>$a && $b>$c){
    echo "b= ". $b . "is the maximum number";
}
else{
    echo "c= ". $c . "is the maximum number";
}
?>