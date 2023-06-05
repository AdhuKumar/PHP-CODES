<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRING REVERSE</title>

</head>
<body>
<?php

$string = "hello world";
$reversedString = "";

for ($i = strlen($string) - 1; $i >= 0; $i--) {
   
    $reversedString .= $string[$i];
}

echo "String: " . $string . "<br>";
echo "Reversed String with out strrev: " . $reversedString . "\n";

?>

</body>
</html>