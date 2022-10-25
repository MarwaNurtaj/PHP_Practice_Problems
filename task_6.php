<html>

<body>
  <form method="post">
    Enter a String to check if its palindromeor not: <input type="text" name="str"/>
    <button type="submit">Click to Check</button>
  </form>

  <?php

  if ($_POST) {
    $sampleString = $_POST['str'];
    $reverse = strrev($sampleString);
    if ($sampleString == $reverse) {
      echo "The $sampleString is Palindrome";
    } else {
      echo "The $sampleString is not a Palindrome";
    }
  }
  ?>
</body>
</html>
