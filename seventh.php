<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCEPTION HANDLING</title>
</head>
<body>

    <?php
    try 
    {
        $result = divide($numerator,$denominator);
        echo "RESULT".$result;
    }
    catch(Exception $e)
    {
        echo "ERROR".$e->getMessage();
    }
    function divide($numerator, $denominator) {
        if ($denominator == 0) 
        {
           throw new Exception("CANNOT BE DIVIDED BY ZERO");
        } 
        else
        {
            return $numerator/$denominator;
        }
    }
    ?>
</body>
</html>