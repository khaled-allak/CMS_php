

<?php
/* for new line */
$text = "Hello,\nWorld!\nI am khaled.\n";
echo nl2br($text);





/* Search 3 built-in function of a string. */
echo ("<h1><strong>to merge array<br></strong></h1>");
$class1 = array("laila", "dextar");
$class2 = array("pop", "rita");
$total = array_merge($class1, $class2);
print_r($total);

echo ("<h1><strong>converts a string to lowercase<br></strong></h1>");

$string = "HeLLO woRLD!";
$lowercase = strtolower($string);
echo($lowercase);

echo ("<h1><strong>splits a string into an array <br></strong></h1>");
$class1 ="laila,dextar,pop, rita";
$total = explode(",", $class1);
print_r($total);

echo ("<h1><strong>current date<br></strong></h1>");
$date = date('Y-m-d H:i:s');
echo "The current date and time is $date.";






/*  Display $_SERVER in readable format.*/
echo ("<h1><strong>Display \$_SERVER<br></strong></h1>");

echo "<pre>";
print_r($_SERVER);
echo "</pre>";



/* 4-  Write a PHP script to get the sum and avg of an indexed array */
echo ("<h1><strong>The sum and avg of an indexed array<br></strong></h1>");

$array = array(12, 45, 10, 25);
$sum = array_sum($array);
$count = count($array);
$avg = ($sum / $count);
echo "The sum  is: " . $sum . "<br>";
echo "The average  is: " . $avg . "<br>";
rsort($array);
echo "The sorted array in reverse order is: ";
print_r($array);


/*5-  Write a PHP script to sort the following associative array */

echo ("<h1><strong>Associative array<br></strong></h1>");

$ages = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);

asort($ages);
echo "Sorted by value in ascending order: ";
print_r($ages);
echo "<br>";

ksort($ages);
echo "Sorted by key in ascending order: ";
print_r($ages);
echo "<br>";

arsort($ages);
echo "Sorted by value in descending order: ";
print_r($ages);
echo "<br>";

krsort($ages);
echo "Sorted by key in descending order: ";
print_r($ages);
echo "<br>";
 ?>



