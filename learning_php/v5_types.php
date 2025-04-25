<?php
// declare(strict_types=1); // debe ser lo primero en el script

include_once 'v0_util_html.php';


/*
Usar __DIR__: Para construir rutas dinámicamente basadas en la ubicación del archivo actual, 
puedes usar la constante mágica __DIR__ (que representa el directorio del script actual):

include __DIR__ . '/includes/funciones_utiles.php';
require_once __DIR__ . '/../lib/mis_funciones.php';
*/

// types 

echo geth2 ('Types & Type Casting in PHP');
echo '- PHP is dinamically typed';
echo '<br>- also known as "WEAKLLY TYPED"';
echo '<br>- you are not required to define a type for your variable';
echo '<br>- the type of the variable can change after it has been defined';
echo '<br>- php os (Core Defined Constants, PHP_OS): ' . PHP_OS;

br();
echo geth1 ('Tipos de datos');
echo geth2 ('4 Scalar types');

$completed = true; // false will be printed as _blanc (espacio en blando)
$score = 90;
$price = 19.99; // float and double son lo mismo en php
$greeting = "Hello Gio";

echo "$completed<br>"; // it prints one but we asigned "true"
echo "$score<br>";
echo "$price<br>";
echo $greeting . '<br />';

// conseguir el tipo de una variable a travez de gettipe() function
echo geth4('gettype() function');
echo '$completed type: ' . gettype($completed) . '<br />';
echo '$score type: ' . gettype($score) . '<br />';
echo '$price type: ' . gettype($price) . '<br />';
echo '$greeting type: ' . gettype($greeting) . '<br />';

echo geth4('obtener el tipo de una variable uando var_dump()');
var_dump($completed);
echo '<br />';
var_dump($score);
echo '<br />';
var_dump($price);
echo '<br />';
var_dump($greeting);
echo '<br />';

echo geth2 ('4 Compound types');
$array = ["aaa",1,2,3,4.5,0.005,'a',true];
var_dump($array);
echo '<br />';
print_r($array);
echo '- podemos usar la funcion print_r() imprime el array de forma mas legible ' . '<br />';
echo '- Arreglos: ' . '<br />sobre los demas tips los veremos mas adelante en el curso:<br />';
echo '- Objetos: ' . '<br />';
echo '- Callable: ' . '<br />';
echo '- Iterable: ' . '<br />';

echo geth2 ('2 Special Types');
echo 'Igualmente los veremos mas adelante ' . '<br />';
echo '- Resource: ' . '<br />';
echo '- Null: ' . '<br />';
echo '<br />';
echo gettype('a'); // string, char type does not existe aparentlly

echo geth2 ('Hinting operator PHP');
echo 'el hinting operator basicamente nos dice que en el envio de parametros<br>';
echo 'en una funcion, podemos especificar el tipo que se espera recivir en los parametros<br>';

function sum(int $x, int $y) { // tye types are the type hinting
  var_dump($x, $y);
  echo '<br />';
  echo 'type valores recividos: [' . gettype($x) .', ' . gettype($y) . ']' . '<br />';
  echo '<br />';
  return $x + $y;
}

$sum = sum(2, 4);
echo $sum . ', valores enviados: [int,int]' . '<br />';
$sum = sum(2, 3);
echo $sum . ', valores enviados: [int,int]' . '<br />';

brr(2);
$a = 2;
$b = '3';
$sum = sum($a, '3');
echo $sum . ', valores enviados: [' . gettype($a) .', ' . gettype($b) . ']' . '<br />';

$a = '2';
$b = '3';
$sum = sum($a, $b);
echo $sum . ', valores enviados: [' . gettype($a) .', ' . gettype($b) . ']' . '<br />';

$a = 3.5;
$b = 9.2;
$sum = sum($a, $b);
echo $sum . ', valores enviados: [' . gettype($a) .', ' . gettype($b) . ']' . '<br />';

echo geth2 ('Type Jugling or Type Cohercion');
echo 'es cuando indicamos que tipo se espera en los parametros de una funcion';
echo '<br />el tipo de una variable se mantiene hasta cierto punto, depende el contexto';
echo '<br />';
echo '<br />The type of a variable is only guaranteed to be that type up until that point';
echo '<br />';
echo '<br />garantizamos que sea integer pero solo hasta el punto dondde entra a la funcion';
echo '<br />despues no hay garantia que el tipo pueda cambiar.';
echo '<br />en este caso fuera de la funcion.';

br();
echo geth2 ('Tipo estricto');
echo 'podemos activar el tipo estricto con declare(strict_types=1);';
echo '<br>con esto si mandamos un tipo que no esta definido en la funcion, aunque lo pueda convertir';
echo '<br>mandara un error.';
echo '<br>- strict_types deben declararse al inicio del script, ser lo primero.';
echo '<br>- en este caso ocasionara varios "Fatal error".';
echo '<br>- incluso en modo strict puedes pasar un int si se espera un float';
br();
echo geth2 ('Tipo Estricto y Hinting Types');
echo '<br>- depende de ti usarlos o no';
echo '<br>- se RECOMIENDA USARLOS simempre que se pueda';
echo '<br>- provee mejor calidad of code';
echo '<br>- se sabe exactamente que tipos son aceptados';
echo '<br>- evitara errores inesperados';

br();
echo geth2 ('Type Casting / Type Juggling (valanceo de tipos)');
echo '<br />Puedes convertir un tipo de variable a otra poniendo el itpo en parentesis antes:';
echo '<br />por ejemplo: $var = 1, pasarla a string $var = (string)$var;';
echo '<br />';

$var = 5;
var_dump($var);

$var = (string)$var;
echo '<br />';
var_dump($var);

$var = (int)$var;
echo '<br />';
var_dump($var);

$var = (double)$var;
echo '<br />';
var_dump($var);


/*

*/
