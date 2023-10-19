<!-- //over-loading within same class 

 polymorphism
// polymorphism ability to take more than one form
-->
<?php
class dad
{
     function programmer($bike)
    {
        echo "Hi I am ". $bike . "<br>";
    }

// class son extends dad
// {

    function programmer($a,$x)
    {
        echo "Hi I am ". $a. $x . "<br>";
    }

}

$obj1 = new dad();
// $obj2 = new son();
$obj1->programmer('Dad');
$obj1->programmer('Son,snds');


?>