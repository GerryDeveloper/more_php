<?php
include_once 'v0_util_html.php';

/* 
- representa una variable con valor nulo
- 3 opciones para definir un Null:
- recuerda que cuando imprimimos algo con echo esto es casteado a string, por eso
  muchos tipos imprimen cosas no esperabamos como true echoes 1, false = ""
  cuando null es casteado a string sera convertido a una cadena vacia "" tambien

1- null constant
  puedes tener una variable asignada a una constante nula
  - es case sensitive, puede ser null o NULL

2- la variable no ha sido definida

3- usamos unsetting en la variable para "destruirla"

- casting
  como sabemos las variables al ser imprimidas con echo usa un caasteo a string
  por tanto null es convertido a cadena vacia ""

======
Usos de null
- si no sabemos el valor de una variable podemos asignarla por defecto a null, depsues
  en el constructor puedes asignarla a su valor
- dentro de clases y funciones como valor de retorno

*/
hr();
echo geth1('Formas de como una variable podria ser Null');

hr();
echo geth2('1- constante definida como Null');

$x = null; // retornara true abajo
$x = 126;

echo $x;
echo '<br>';
br2();
var_dump($x);
br2();
var_dump(is_null($x)); // podemos usar is_null() para comprobar si es null o no

// hr();
br2();
echo geth3('comparacion con Null usando ===');

$x = null;
var_dump($x === null);

hr();
echo geth2('2- la variable no ha sido definida');

var_dump(is_null($w)); // warniing variable no definida

hr();
echo geth2('3- Si tu especificamente la unseteas unset($var)');

$x = 128;
var_dump($x);
// br2();
unset($x);
var_dump($x);

hr();
echo geth4('Casting');
echo 'Casteamos Null a string, int, bool y array:<br><br>';

$x = null;
var_dump( (string) $x); // casteada a tipo nulo, esto pasa cuando echoeamos $x
br2();
var_dump( (int) $x);
br2();
var_dump( (bool) $x);
br2();
var_dump( (array) $x);
br2();