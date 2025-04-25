<?php

include_once 'v0_util_html.php';


echo geth1 ('Tipo Boolean');

$isComplete = true;
// $isComplete = false;
$isComplete = -0; // fail
$isComplete = []; // fail
$isComplete = [0]; // success, non empty array

if ($isComplete) {
  // do this
  echo geth3 ('success');
} else {
  // else, do this instead
  echo geth3 ('fail');
}

echo '<br />';
echo gettype((boolean)'-0');
echo '<br>';
echo gettype((boolean)'0');
echo '<br>';
echo (boolean)'-0'; // 1
echo '<br>'; 
echo (boolean)'0'; // blanck = "" 0 in boolean, empty string

hr();
echo geth2 ('obtener valor "true" o "false" usando var_dump()');
echo true; // cadena 1
echo '<br>';
echo false; // cadena vacia;
echo '<br>';
echo (boolean) true;
echo '<br>';

var_dump(true);
echo '<br>';
var_dump(false);

hr();
echo geth2 ('funcion is_bool()');
var_dump(is_bool([]));
echo '<br>';
var_dump(is_bool(""));
echo '<br>';
var_dump(is_bool(0.0));
echo '<br>';
var_dump(is_bool(1));
echo '<br>';
var_dump(is_bool(false));
echo '<br>';
var_dump(is_bool(true));