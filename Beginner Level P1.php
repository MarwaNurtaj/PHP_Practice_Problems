<?php
// The formula to calculate the area of a circumference is defined as A = π . R2. 
//Considering to this problem that π = 3.14159:Calculate the area using the formula given in the problem description.
$n= 3.14159;
$R= readline("Enter a number");
$A= round(((pow((round($R,2)),2))*$n),4);
echo "A=",$A ;
?>
