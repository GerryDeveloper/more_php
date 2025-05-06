<?php
include_once "v0_util_html.php";

// definimos un array
$programLanguages = ['PHP', 'Java', 'Python'];

// mutamos el array y actualizamos un valor
// $programLanguages[1] = 'C++';

// definimos una rray de la manera antigua
$arrFruits = array('Pera', 'Manzana', 'Durazno');

var_dump($programLanguages);
echo '<br>';
print_r($programLanguages);
echo '<br>';
echo '<pre>';
print_r($programLanguages);
echo '</pre>';
br2();
echo 'Cantidad de elementos count(): ' . count($programLanguages);
br2();

// $programLanguages[] = 'C++'; // push al arreglo
array_push($programLanguages, 'C++', 'Java', 'Python');

hr();
var_dump($programLanguages);
echo '<br>';
print_r($programLanguages);
echo '<br>';
echo '<pre>';
print_r($programLanguages);
echo '</pre>';
br2();
echo 'Cantidad de elementos count(): ' . count($programLanguages);
br2();

var_dump(isset($programLanguages[0])); // true
echo '<br>';
var_dump(isset($programLanguages[4])); // valse, el indice no existe

hr();
echo geth2('Nombrar tus Keys');
$namedKeys = <<<TEXT
como se dijo anteriormente, puedes nombrar tus keys
- si no se nombran las keys PHP les asigna valores enteros desde 0,1,2,...
  esto se hacer por default, pero pueden ser definidos por el usuario
- la key debe ser un arreglo o un entero string or int
- cuando tienes llaves nombradas se llama arreglo asociativo
TEXT;

echo nl2br($namedKeys);

$pLanguages = [
  'php' => PHP_VERSION,
  'Python' => '3.9'
];

echo '<br><pre>';
print_r($pLanguages);
echo '</pre>';

br2();
echo $pLanguages['php'];

// agregamos otro elemento al arrelgo asociativo
br2();
$pLanguages['go'] = '1.15';

// podemos usar variables y no solo cadenas 
br2();
$newLanguage = 'LISP';
$pLanguages[$newLanguage] = '2.5.4';

echo '<br><pre>';
print_r($pLanguages);
echo '</pre>';

echo '<pre>';
print_r($pLanguages);
echo '</pre>';

/*
// usamos comillas simples a menos que tengamos que incluir una variable dentro
- no puedes acceder a elementos de un array con indices negativos
  eso solo funciona en cadenas
- puedes tratar a los arreglos como distintas estructuras de datos como: stacks, queue, collections,
  hash-tables, so on...
- si intentas acceder a un valor en un indice que no existe obtendras null de retorno
- podemos usar la funcion isset() para saber si el item existe en determinado index
  conociendo esto puedes ver si el valor existe antes de acceder a el
- puedes mutar el array y actualizar un valor en una posicion especifica

- push al array con esta sintaxis
$programLanguages[] = 'C++'; // push al arreglo
- podemos hacerlo tamiben con la sintaxis:
array_push($array, $element1, $element2, ...); // muta el array, paso por reference

como se dijo anteriormente, puedes nombrar tus keys
- si no se nombran las keys PHP les asigna valores enteros desde 0,1,2,...
  esto se hacer por default, pero pueden ser definidos por el usuario
- la key debe ser un arreglo o un entero string or int
- cuando tienes llaves nombradas se llama ARREGLO ASOCIATIVO

- los arreglos pueden tener valores de distintos tipos

--07:52 attime
*/