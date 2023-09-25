<!-- Write a PHP program to check whether a character is uppercase or lowercase alphabet. -->
<?php 
$a= "a";
if($a>='a' && $a<='z'){
    echo " a = ". $a . " is lowercase"; 
}
elseif($a>='A' && $a<='Z' ){
    echo " a = ". $a . " is uppercase"; 
}
else{
    echo " a = ". $a . " is not an alphabet"; 
}
?>