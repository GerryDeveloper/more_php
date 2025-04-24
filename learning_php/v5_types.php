<?php
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


/*
  types and type casting in PHP

  - php is dinamically typed
  - also known as weaklly typed language.
  - you are not required to define a type of your variable
  - the type of the variable can change after it has been defined

  - dynamically typed language means: the type checked happnes at RUNTIME

*/
