<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMSTRONG NUMBER</title>

</head>

<?php
 
    $number=371;  
    $sum=0;  
    $i=$number;
     
    while($i!=0)  
    {  
    $temp=$i%10;  
    $sum=$sum+$temp*$temp*$temp;  
    $i=$i/10;  
    }
     
    if($number==$sum)  
    {  
    echo "$number is an Armstrong Number.";  
    }  
     
    else  
    {  
    echo "$number is not an Armstrong Number.";  
    }  
 ?> 


<body>
</html>