<?php

echo "hello world";

print '<br>You can use print, similar to echo, but has a couple of differences';
print '<br>- print has a return value of 1';
print '<br>- we can use echo print \'argumento de print\':<br>';
print '- print can be use within expressions, but echo no<br>';
echo print 'esto retornara un: ';


br(2);
echo 'Another thing you can do with echo is to print like this:<br>';
echo "echo 'this ', ' ', 'string will', ' ', 'concatenate'";
echo "<br>and thath cant be used with print";
echo "<br>you can sue () sith both echo and print:";
br(2);
echo '<br>Esto', ' ' , 'es una cadena ', ' ', 'que se va a concatenar';
echo '<br> - echo is faster than print, so it\'s recomended to use echo instead';
echo '<br> - you can scape characters usin backslash: \\';
br(2);

echo geth3('Variables en PHP');
echo 'you can declare variables using $varName, the name cannot start with a number, or contain special';
echo ' characters hence %, @, +, etc.';
echo '<br> - variable names cannot be reserved words such as print, echo, etc.';
echo '<br> - variable can start or contain _';
echo '<br> - variables cannot be named like $this, cause $this is an object, is a reference to he actual class obj';

// creamos variable:
$name = 'Giornno';
echo "<br>$name";

echo geth4('Variables son asignadas by value por default en PHP');

echo '<br> - esto significa que se les asigna un valo, no una direccion';
echo '<br>ejemplo:';
echo '<br>$x = 1';
echo '<br>$y = $x';
echo '<br>$x = 3';

$x = 1;
$y = $x;
$x = 3;

echo '<br>echo($x): ' . "$x";
echo '<br>echo($y): ' . "$y";

br(2);
echo geth4('paso por referencia PHP');
echo 'para pasar por referencia necesitas agregar & antes de la variabe: &$varName<br>';
echo '<br>$x = 1';
echo '<br>$y = &$x';
echo '<br>$x = 3';

$x = 1;
$y = &$x;
$x = 3;

echo '<br>echo($x): ' . "$x";
echo '<br>echo($y): ' . "$y";

br(2);
echo geth4('Ejemplo de variables');
echo 'creamos variable: $firstName = Luis';
$firstName = 'Luis';
echo '<br>lets print the variable using \'\'';
echo '<br>Hello $firstName';
echo '<br>lets print the variable using ""';
echo "<br>hello $firstName";
echo '<br>lwe can also use {$varName} to enclouse the variable and make it more readable';
echo "<br>hello {$firstName}";
echo '<br>';
echo '<br> - you can concatenate text with a variable using .';
echo "<br>'something' . ' ' . 'like this'";
echo '<br>ejemplo concatenacion: ';
echo 'Hello ' . $firstName;


br(2);
echo geth3('Separar el PRESENTATINO LOGIC from your BUSINESS LOGIC');

br(2);
echo geth3('Comentarios en PHP');
echo '<br>- con // para una sola linea';
echo '<br>- con # para una sola linea';
echo '<br>- o se pueden escribir como /* para abarcar';
echo '<br>multiples lineas, y este para cerrar. */';
echo '<br> y este para documentacion:';
echo '<br>/**';
echo '<br> *';
echo '<br> *';
echo '<br>*/';

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


// ignore code bellow
br(2);
echo '<br>You don\'t need the semicolon in the last line'
// clossing tag is redundant because if the file only contains php code then it is not neccesary

// bellow is some BASIC HTML
?>
<!DOCTYPE html>
<html>
  <body>
    <hr>
    <h1>
      <?php
      echo 'Hello world';
      
      ?>
    </h1>
    <p>My first paragraph</p>
    <p>
      <?php
      echo 'hola ' . $firstName;
      ?>
    </p>
    <?php 
      $a = 10;
      $b = 6;
      $x = 20;
      $y = 16;
      echo '<span>' . $a . ', ' . $b . '</span>';
      echo '<br>';
      echo '<span>' . $x . ', ' . $y . '</span>'; // esto no funciona porque mas arriba declaraste $y = &$x que es ref
    ?>
    <p>
      <?=
      'version corta de la etiqueta <?php echo "hola" ?> y es: <?= "texto" ?>
      <br> esto solo se usa para imprimir un mensaje, solamente, si necesitas procesar mas usa la etiqueta completa';
      ?>
      <?php echo '<br>esta etiqueta completa: <?php ?>' ?>
    </p>
  </body>
</html>