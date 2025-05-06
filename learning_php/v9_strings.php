<?php
include_once 'v0_util_html.php';
/*
- una cadena es una secuencia de caracteres
- podemos declarar cadenas usando '', o ""
- la diferencia es que con comillas simples '' no puedes interpolar variables
  pero con comillas dobles "" si
- al incluir variables dentro de cadenas puedes usar {}
  tambien puedes usar el $ fuera o dentro como prefieras
- puedes usar numeros negativos para acceder a los indices empezando por el final
- podemos establecer un caracter en una posicion fuera del tamanio original de la cadena
  esto resultara en el incremento del tamanio de la cadena

- hay dos sintaxis mas para representar cadenas
- son maneras de manejar cadenas multilinea y largas que podrian contener expresiones complicadas
  podrian contener ambos '', y "" sin la necesidad de escapar dichos caracteres

- HEREDOC
  - trata a las cadena como si fueran enclosed in ""
  - SI podemos tener variables
  - sintaxis:
  <<<INDENTIFIER_TAG

  IDENTIFIER_TAG;
  - usamos el metodo nl2br($texto); para que imprima los saltos de linea tal cual
  - util para imprimir varias variables dentro de la cadena

- NOWDOC
  - trata las cadenas como si fueran encerradas en ''
  - no podemos tener variables
  - exactamente lo mismo que heredoc, pero el identificador necesita estar encerrado entre ''
  <<<'INDENTIFIER_TAG'

  IDENTIFIER_TAG;
*/

$firstName = 'Luis';
$lastName = "Cardona";

$fullName1 = '$firstName $lastName';
$fullName2 = "$firstName $lastName";
$fullName3 = "${firstName} ${lastName}";
$fullName4 = "{$firstName} {$lastName}";

$fullName5 = $firstName . ' ' . $lastName;
// test
// $fullName5 = 'abc';

echo $fullName1;
echo '<br>';
echo $fullName2;
echo '<br>';
echo $fullName3;
echo '<br>';
echo $fullName4;
echo '<br>';

printhr();
echo geth4('accedemos a cada letra de cadena usando [i] indices: ');
for ($i = 0; $i < strlen($fullName5); $i++) {
  echo "$fullName5[$i], index=$i<br>";
}

printhr();
echo geth4('accedeos a los indices usando negativos [-$i]');

for ($i = -1; $i >= -(strlen($fullName5)); $i --) { // porque carajo funciona con +1???, es por el > 
  echo "$fullName5[$i], index=$i<br>";
}
echo '<br>lenght = ' . strlen($fullName5) . '<br>';

printhr();
echo geth4('acceder a indices inexistentes en la cadena');

$cadena1 = 'cadena1';
var_dump($cadena1);
echo '<br>';
// for ($i=0; $i < 15; $i++) { 
for ($i=0; $i < strlen($cadena1); $i++) { 
  # code...
  echo $cadena1[$i] . "<br>";
}
var_dump($cadena1);
echo '<br>';

printhr();
echo geth4('testeo strings size');
$cad2 = 'abcde';

var_dump($cad2);
echo '<br>';

$cad2[15] = 'f'; // los espacios intermedios se interpretan como espacios en blanco
var_dump($cad2);
echo '<br>';

printhr();
echo geth2('Heredoc');
echo getp('- Es un manera de representar cadenas multilinea o largas y con caracteres especiales');

$exampleVar1 = 1;
$exampleVar2 = 2;
$exampleVar3 = 3;

$heredocStr = <<<TEXT
Esto es una cadena usando "Heredoc" todo dentro de esta cadena incluidos simbolos especiales
sera representado tal cual, la sintaxis es: (no se puede representar)
new line $exampleVar1
new line $exampleVar2
another line $exampleVar3
one more line
TEXT;

echo 'variable heredoc usando echo:<br>' . $heredocStr;
echo '<br><br>variable heredoc usando nl2br():<br>' . nl2br($heredocStr);

printhr();
echo geth2('Nowdoc');

$nowdocStr = <<<'TEXT'
texto usando Nowdoc
new line $exampleVar1
new line $exampleVar2
another line $exampleVar3
las variables de arriba seran tratadas acomo texto literal
TEXT;

echo nl2br($nowdocStr);

printhr();
echo geth4('Heredoc & Nowdoc para crear etiquetas HTML dinamicamente');

$text1 = <<<TEXT1
- texto usando heredoc
- podemos incluir etiquetas HTML generadas automaticamente
<div>
  <p>Hello</p>
  <p>World</p>
</div>
TEXT1;

echo nl2br($text1);
echo '<br>';

$escalaresVistos = <<<TEXT2
Escalares vistos hasta ahora
- integers
- floats
- strings
- booleans
TEXT2;

echo nl2br($escalaresVistos);
echo '<br>';

$bool1 = false;
$bool2 = true;

echo "$bool1<br>$bool2";
echo '<br><br>';

var_dump($bool1);
echo '<br>';
var_dump($bool2);


