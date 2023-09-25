<!-- Write a PHP program to check whether a year is leap year or not. -->
<?php 
$a= 1800;
if($a%4==0 && $a%100!=0 ){
    echo " a = ". $a . " is a leap year"; 
}
else if($a%400==0 && $a%100==0 ){
    echo " a = ". $a . " is a leap year"; 
}
else{
    echo " a = ". $a . " is a not leap year";
}
?>