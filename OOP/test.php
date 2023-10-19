
<?php
class dad
{
    public function programmer()
    {
        return "Hi I am hwllllll"    ."<br>";
    }
}
class son extends dad
{
   public function programmer()
    {

        return "Hi I am " ; 
    }
}

$obj1 = new son();
echo $obj1->programmer();



?>