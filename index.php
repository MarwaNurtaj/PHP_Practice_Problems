<!DOCTYPE html>
<html>

<head>
    <title>PHP Programming</title>
</head>

<body>

    <form method="POST" action="php-8.php">
    <!-- php-8.php -->
        <div>
            <label for="name">Name</label>
            <input name="input" id="name" type="text">
        </div>
        <br>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    
<?php

    $vowels = ['a','e','i','o','u'];
    if ($_POST) {
        $a = $_POST['input'];
        $letter = strtolower($a);
        if($letter >= 'a' && $letter <= 'z'){
            if($letter == $vowels[0] || $letter ==$vowels[1] || $letter ==$vowels[2] || $letter == $vowels[3] || $letter == $vowels[4])
                {
                    echo "Its a vowel";
                }
            else{
                    echo "Its a consonant";
                }
        }
    }
?>
    
</body>

</html>