<?php
// ARITHEMETIC OPERATION
echo "ARITHEMETIC OPERATION"."<br>";
$a = 10;
$b = 15;
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Increment a: " . (++$a) . "<br>";
echo "Decrement b: " . (--$b) . "<br><br>";

// LOGICAL OPERATION
echo "LOGICAL OPERATION"."<br>";
$x = 5;
$y = 10;
echo "logicalAND:".($x && $y). "<br>";
echo "Logical OR: " . ($x || $y) . "<br>";
echo "Logical NOT: " . (!$x) . "<br>";
echo "Equal: " . ($x == $y) . "<br>";
echo "Not Equal: " . ($x != $y) . "<br>";
echo "Greater Than: " . ($x > $y) . "<br>";
echo "Less Than: " . ($x < $y) . "<br><br>";

// COMPARISON OPERATOR
echo "COMPARISON OPERATOR"."<br>";
$p = "hello";
$q = "world";
echo "Equal: " . ($p == $q) . "<br>";
echo "Not Identical: " . ($p !== $q) . "<br>";
echo "Greater Than or Equal To: " . ($a >= $b) . "<br>";
echo "Less Than or Equal To: " . ($a <= $b) . "<br><br>";

// CONDITIONAL OPERATOR
echo "CONDITIONAL OPERATOR"."<br>";
$age = 20;
echo ($age < 18) ? "You are not old enough to vote." : "You are old enough to vote." . "<br><br>";

// ASSIGNMENT OPERATOR
echo "ASSIGNMENT OPERATOR"."<br>";
$num = 10;
echo "Initial value: " . $num . "<br>";
$num += 5;
echo "Addition assignment: " . $num . "<br>";
$num -= 2;
echo "Subtraction assignment: " . $num . "<br>";
$num *= 3;
echo "Multiplication assignment: " . $num . "<br>";
$num /= 2;
echo "Division assignment: " . $num . "<br><br>";
?>