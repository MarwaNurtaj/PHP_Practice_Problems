<!-- Write a PHP program to check whether a character is alphabet or not. -->
<?php 
$a= "A";
if(($a>='a' && $a<='z') || ($a>='A' && $a<='Z' )){
    echo " a = ". $a . " is an alphabet"; 
}
else{
    echo " a = ". $a . " is not an alphabet"; 
}
?>