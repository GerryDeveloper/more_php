<?php

include_once "v0_util_html.php";

// INTEGERS

// constante predefinida para concocer el tamanio del integer en este contexto

echo 'PHP_INT_MAX:<br>';
echo PHP_INT_MAX;
echo '<br>PHP_INT_MIN:<br>';
echo PHP_INT_MIN;

br();
// base 10
echo geth4('enteros base 10');

$x = 5;

echo 'entero base 10 $x: ' . $x;
echo '<br>';

// hexadecimal
echo geth4('enteros base HEXADECIMAL');

$x = 0x2A; // hexadecimal

echo 'entero base hexadecimal $x: ' . $x;
echo '<br>';
var_dump($x);

// octal
echo geth4('enteros base octal');

$x = 027; // hexadecimal

echo 'entero base octal $x: ' . $x;
echo '<br>';
var_dump($x);


// binario
echo geth4('enteros en BINARIO');

$x = 0b110010101; // hexadecimal

echo 'entero base 2 $x: ' . $x;
echo '<br>';
var_dump($x);