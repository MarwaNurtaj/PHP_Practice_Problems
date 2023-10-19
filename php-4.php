
<!-- Write a PHP program to check whether a number is divisible by 5 and 11 or not. -->
<?php 
$a= 55;
if($a%5==0 && $a%11==0){
    echo " a = ". $a . " is divisible by 5 and 11"; 
}
else{
    echo " a = ". $a . " is not divisible by 5 and 11";
}
?>