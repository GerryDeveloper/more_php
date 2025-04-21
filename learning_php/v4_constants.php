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

// functions
function br($quantity = 1) {
  for ($i = 0; $i < $quantity; $i ++) {
    print '<br>';
  }
  echo '<hr>';
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