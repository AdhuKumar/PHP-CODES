<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array manupilation</title>
</head>
<body>
<?php
   $array1 = array(3, 6, 1, 8, 2);
   $array2 = array(7, 4, 9, 5, 10);
   
   $merged_array = array_merge($array1, $array2);
   
   sort($merged_array);

   foreach ($merged_array as $value) {
      echo "$value ";
   }
?>
</body>
</html>