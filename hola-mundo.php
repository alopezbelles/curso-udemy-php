<?php

echo "hola mundo";

//Variables

$name = "Alex";
$age = 33;
$developer = true;
echo $name . "<br>";
echo "Mi edad es $age". "<br>";

//Constantes

define('NAME', 'Alex');
define('AGE', 33);
echo AGE . "<br>";
echo "Me llamo " .NAME. "<br>";

//Arrays

$fruits = array("Apple", "Peige", "Orange", "Banana");
echo $fruits[1] . "<br>";
print_r($fruits);

