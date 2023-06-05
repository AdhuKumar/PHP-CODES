<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>

</head>
<body>
<?php
function Palindrome($MyString) {
  $revString = strrev($MyString);
  if ($revString == $MyString){
    echo $MyString." is a Palindrome string.\n";
  } else {
    echo $MyString." is not a Palindrome string.\n";
  }
}

Palindrome("malayalam")."<br>";
Palindrome("radar")
?>
</body>
</html>