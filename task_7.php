<?php

function random_password($upper = 2, $lower = 2, $numeric = 2, $other = 2) { 
    
    $take_password= Array(); 
    $passWord = ''; 

    for ($i = 0; $i < $upper; $i++) { 
        $take_password[] = chr(rand(65, 90)); 
    } 
    for ($i = 0; $i < $lower; $i++) { 
        $take_password[] = chr(rand(97, 122)); 
    } 
    for ($i = 0; $i < $numeric; $i++) { 
        $take_password[] = chr(rand(48, 57)); 
    } 
    for ($i = 0; $i < $other; $i++) { 
        $take_password[] = chr(rand(33, 47)); 
    } 

    shuffle($take_password); 

    foreach ($take_password as $char) { 
        $passWord .= $char; 
    } 
    return $passWord; 
} 
echo "\n"."Random Password : ".random_password()."\n";

?>