<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASSWORD STRENGTH LENGTH</title>

</head>
<body>

<?php
$password = 'adhu';


$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) < 8) 
{
    echo 'Password is not Strong';
    
} else 
{
    echo 'Password is Strong';
} 

?>
</body>
</html>