<!-- Write a PHP program to input any character and check whether it is alphabet, digit or special character. -->
<?php 
$a= 0;
if(($a>='a' && $a<='z') || ($a>='A' && $a<='Z' )){
    echo " a = ". $a . " is an alphabet"; 
}
elseif($a>=0 && $a<=9){
    echo " a = ". $a . " is a digit"; 
}
else{
    echo " a = ". $a . " is a special charecter";  
}
?>