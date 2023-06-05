<?php

// For loop example
echo "For loop:\n"."<br>";
for ($i = 0; $i < 10; $i++) {
    echo "$i\n"."<br>";
}


// While loop example
echo "While loop:\n"."<br>";
$j = 0;
while ($j < 5) {
    echo "$j\n"."<br>"; 
    $j++;
}

// Do-while loop example
echo "Do-while loop:\n"."<br>";
$k = 0;
do {
    echo "$k\n"."<br>";;
    $k++;
} while ($k < 5);

// Foreach loop example
echo "Foreach loop:\n"."<br>";
$array = array("adhu", "aryan", "divij");
foreach ($array as $value) {
    echo "$value\n"."<br>";
}

// switch case example
echo "switch case:\n"."<br>";
$favcolor = "red";
switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";
      break;
    case "blue":
      echo "Your favorite color is blue!";
      break;
    case "green":
      echo "Your favorite color is green!";
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!";
}



?>