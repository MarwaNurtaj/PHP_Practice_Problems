<!-- Write a PHP program to input any alphabet and check whether it is vowel or consonant. -->
<?php
$vowels = ['a','e','i','o','u'];

$input=  $_POST["input"];    
$letter = strtolower($input);   
// $letter = strtolower($letter);
if($letter >= 'a' && $letter <= 'z'){
    if($letter == $vowels[0] || $letter ==$vowels[1] || $letter ==$vowels[2] || $letter == $vowels[3] || $letter == $vowels[4])
    {
        echo "Its a vowel";
    }
    else{
        echo "Its a consonant";
    }
}
?>
