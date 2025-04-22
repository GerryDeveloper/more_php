<?php

// constants
echo geth3('Constants PHP');
echo 'constants son valores que no pueden cambiar una vez son definidos';
echo 'diferente de las variables que pueden cambiar de valor despes de ser definidas';

$firstName = 'Luis';

$firstName = 'Joe';

echo $firstName; // Joe


echo geth3('2 maneras de definir constantes en PHP');
echo geth4('1. by using a funciton called defined()');
echo 'define accepts 3 parameters define("name", "value", "if case sensitive or not)';
echo '<br>define(\'name\', \'value\', \'true/false\')';
echo '<br>pero el tercer parametro ha sido depreciado (deprecated) asi que no lo uses!';
echo "<br>define('STAUTS_PAID', 'paid')";
define('STATUS_PAID', 'paid');
var_dump(STATUS_PAID);
echo '<br><br>';
echo '- para declarar una constante se usan mayusculas solo CONSTANTE_PAID';
echo '<br>- para imprimir su valor mandamos llamar a la constante sin usar $, solo asi: echo CONTS_VAR;';
echo '<br>imprimimos el valor de STATUS_PAID: ';
echo STATUS_PAID;

echo geth5('defined(\'varName\')');
echo 'usamos defined() para saber si la variable ya fue definida ejemplo:';
echo '<br>defined(\'STATUS_PAID\'): ' . defined('STATUS_PAID');
echo '<br>defined(\'STATUS_VOID\'): ' . defined('STATUS_VOID'); // no imprime nada


echo geth4('2. by using "const" keyword');
echo '- la principal diferencia entre const y define() es que:';
echo geth5('const keyword');
echo '- constants created with the const keyword are actually defined in the COMPILED TIME';
echo '- so you CAN\'T define constanst with the const keyword within your CONTROL STRUCTURES such as loops or if-else';
echo geth5('define() function');
echo '- constants created with the define() function are defined at runtime';
echo '- you CAN define constans using the define() function within a control structure';

echo "<br>";
echo 'Ejemplo de definicion de constante usando const:<br>conts CONST1 = "sator"';
const CONST1 = 'sator';
// esto no funciona porque PHP intepreta el contenido con $ como una variable, no lo es
// echo "valor de la constante: CONST1 = {$CONST1}";
echo "valor de la constante CONST1 = " . CONST1; // esta es la forma mas clara y comun de mostrar el valor de una var

br();
echo geth3('Constantes con "const" y "define()" dentro de estructuras de control, if-else, loops...');

echo getp('- constants created with "const" keyword are defined at COMPILE TIME
  <br>- while constnts created with the "define()" function are defined at RUNTIME
  <br>constants with const keyword cannot be defined within your control structures like if-else, loops.');

echo geth4 ("definiendo una constante usando define() dentro de una estructura de control");
echo "<br>" . getp ('if (true) {<br>
    define("STATUS_PAID", 9);<br>
  }<br>');

if (true) {
  define('STATUS_PAID2', 9);
}
// imprimimos la constante definida en tiempo de RUNTIME
echo STATUS_PAID2;

br();
echo geth3 ("Puedes usar \$variables para definir tus nombres de constantes");

$paid = 'PAID3';
$paidValue = 66;

define ('STATUS_' . $paid, $paidValue);

echo '<br>' . STATUS_PAID3; 

br();
echo geth3 ('Predefined CONSTANTS');
echo "- php version: ";
echo "<br>" . PHP_VERSION;
echo "<br>- php mayor version: " .  PHP_MAJOR_VERSION;

br();
echo geth3 ('MAGIC CONSTANTS');
echo '- It\'s value change dependind on where its used';
echo '<br>- are defined in COMPILE TIME, normally constants are defined at RUNTIME';
echo '<br>- example: __LINE__, return the line of wher is it';
echo '<br>' . __LINE__;
echo '<br>' . __LINE__;
echo '<br>' . __LINE__;

br();
echo geth1 ('Variable Variables');
echo '- takes the valur of the variable and treats that as the name of the new variable';
echo '<br>- toma el valor de la variable y lo usa como nomobre';

$foo = 'bar';

$$foo = 'baz'; // toma el valor de $foo, que es 'bar', y ahora ese es el nombre de esta variable, cuyo valor es 'baz'

echo '<br>';
echo $foo; // bar
echo '<br>';
echo $$foo; // baz
echo "<br>";
echo $bar; //baz
echo '<br><br>';
var_dump ($foo);
echo '<br>';
var_dump ($$foo);
echo '<br>';
var_dump ($bar);
echo '<br><br>';

echo "$foo, $$foo<br>"; // this will not work for the variable variable
echo "$foo, {$$foo}<br>"; // do this or bellow instead
echo "$foo, ${$foo}<br>"; 



// functions
function br($quantity = 1) {
  for ($i = 0; $i < $quantity; $i ++) {
    print '<br>';
  }
  echo '<hr>';
}

function geth1 ($arg) {
  return "<h1>$arg</h1>";
}
function geth2 ($arg) {
  return "<h2>$arg</h2>";
}
function geth3 ($arg) {
  return "<h3>$arg</h3>";
}
function geth4 ($arg) {
  return "<h4>$arg</h4>";
}
function geth5 ($arg) {
  return "<h5>$arg</h4>";
}

function getp ($arg) {
  return "<p>$arg</p>";
}