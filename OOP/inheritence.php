<!-- over ridding happens in two classes -->
<!-- //over-loading within same class 
 polymorphism
// polymorphism ability to take more than one form
-->
<?php
class dad
{
    public function programmer($bike)
    {
        echo "Hi I am " . $bike . "<br>";
    }
}
class son extends dad
{
    function programmer($des)
    {
        echo "Hi I am " . $des . "<br>";
    }
}

$obj1 = new dad();
// $obj2 = new son();
// $obj1->programmer('Dad');
$obj2->programmer('Son');

?>