<?php
define('WEBSITE_NAME', 'Bimbo');
echo "WEBSITE_NAME is: " . WEBSITE_NAME;
echo "<br>";    



$servername = $_SERVER['SERVER_NAME'];
$serveraddr = $_SERVER['SERVER_ADDR'];
$serverport = $_SERVER['SERVER_PORT'];


echo "Server Name: $servername<br>";
echo "Server Address: $serveraddr<br>";

echo "Server Port: $serverport<br>";
echo __FILE__;
echo "<br>";
$age = 10;
if ($age < 5) {
    echo 'Stay at home';
}
elseif ($age == 5){
    echo 'Go to Kindergarden';
}
elseif ($age >= 6 && $age <= 12){
    echo 'Go to grade' ;
}

?>
