<html>
<head>
</head>
<body>
<?php

 for ( $num=1; $num<=5; $num++)  
{  
    for($i=1;$i<=$num;$i++){

    echo " * ";  

    }
    echo "<br>";
}  



for ( $num=1; $num<=5; $num++)  
{  for($j=2;$j<=$num;$j++){
    echo "  "."&nbsp" ."&nbsp" ;
}
    for($i=1;$i<=(5-$num)+1;$i++){
        
        // if($i<=(5-$num))
        // {
        //     echo " "." ";
        // }
        // else {
            echo " * ";
           }
           echo "<br> ";

    
   
}  


?>


</body>