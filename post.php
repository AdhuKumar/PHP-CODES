<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> POST METHOD</title>
</head>
<body>
<form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Address: <input type = "text" name = "address" />
         <input type = "submit" />
      </form>
<?php
$a = $_POST["name"] ."<br>";
$b = $_POST["address"];
echo $a, $b;
?>
</body>
</html>