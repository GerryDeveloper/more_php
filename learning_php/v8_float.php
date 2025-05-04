<?php
include_once 'v0_util_html.php';
/* 
floating point numbers are the numbers thaht have decimal points
la notacion exponencial/cientifica: 
  10e3
  103-3

- tambien cuenta como float, incluso la positiva aunque no tenga decimales
*/

$x = 13.5;

echo $x . ", tipo: " . gettype($x);
echo '<br>';

// tambien podemos representar flotantes de forma exponencial
$x = 13.5e3;

echo $x . ", tipo: " . gettype($x);
echo '<br>';

// puede ser una potencia a un numero negativo
$x = 13.5e-3;

echo $x . ", tipo: " . gettype($x);
echo '<br>';

echo '<br>';
echo 'valor maximo de float: ' . PHP_FLOAT_MAX;

echo '<br>';
echo 'valor minimo de float: ' . PHP_FLOAT_MIN;

printhr();
echo geth2('Presicion Float en PHP');

$x = floor((0.1 + 0.7) * 10); // 7
echo 'resultado usando floor(): ' . $x . '<br>';

$x = ceil((0.1 + 0.7) * 10); // 8
echo 'resultado usando ceil(): ' . $x . '<br>';

$x = ceil((0.1 + 0.3) * 10); // 4
echo 'numero: ' . (0.1 + 0.2) . '<br>';
var_dump(0.1 + 0.2);
echo '<br>';
echo 'resultado usando ceil(): ' . $x . '<br>';

printhr();
echo geth2('Comparacion de Flotantes');

$x = 0.23;
$y = 1 - 0.77;

var_dump($x, $y);

echo '<br>';

if ($x == $y) {
  echo "iguals";
} else {
  echo 'differents';
}

printhr();
echo geth2('constantes NAN, INF');
echo 'NAN aparece cuando una operacion no puede ser computada y simplemente imprime "Not A Number"';
echo '<br>por ejemplo log(-1): ' . log(-1);

$x = PHP_FLOAT_MAX * 2;

echo '<br>la variable sigue siendo float';
var_dump($x);

echo '<br>';
echo 'comprobamos si la variable es INF: ' . is_infinite($x);

echo '<br>';
echo 'comprobamos si la variable es finita: ' . is_finite($x);

echo '<br>comprobamos si es NAN: ';
var_dump(is_nan(log(-1)));

printhr();
echo geth2('Casteo de tipos');

$x = 5;
var_dump($x);

echo '<br>';
echo 'convertimos a float: ' ; 
var_dump((float) $x);

echo '<br>';
echo 'podemos usar la funcion floatval(): ' ; 
var_dump( floatval($x)); // se considera innecesaria

printhr();
echo geth3('Convertir cadena a numero');
echo getp('si convertimos una cadena de numeros (numeric) a number, lo hara sin problemas');
echo getp('pero si la cadena no es numeric la convertira a float(0)');


$x = 'sadfasd';
var_dump( (float) $x) ;

echo '<br>';
$x = '123456';
var_dump( (float) $x) ;