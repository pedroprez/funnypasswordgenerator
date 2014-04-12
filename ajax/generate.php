<?php
$str_datos = file_get_contents("../words.json");
$datos = json_decode($str_datos,true);
$max = sizeof ($datos);
$key1 = rand(0, $max -1); 
$key2 = rand(0, $max -1);
$numero = rand(0,99);
echo strtolower($datos[$key1]) . strtolower($datos[$key2]) . $numero;