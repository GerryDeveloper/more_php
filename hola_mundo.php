

<?php 

echo "salida estandar php";

$variables = 'juan';
$variableInt = 99;
$varDouble = 1.89;
$varBoolean = true;

print('Interpolacion de cadeans en PHP usando ""');
print('hola\n');
printf('asdfas<br>asfasdf');
print("<br>Interpolamos cadenas uando \" dobles");
print("<br>cadena: $variables");
print("<br>entero: ${variableInt}");
print("<br>flotante: $varDouble");
print("<br>boolean: ${varBoolean}");

print('<br><br>');
// printf para cadenas formateadas, formated strings
printf("hola %s, numero: %d", $variables, $variableInt);
// output: hola juan, numero: 99

print('<br><br>');
print("empezamos con metodos");
print(returnH1("Metodos en PHP"));

print('<br><br>');
print(returnH1("PHP es un lenguaje de Script"));
print(returnP("La principal diferencie entre un lenguaje de Script y un lenguaje de programacion"));
print(returnP("Los lenguajes de SCRIPT tambien son LENGUAJES DE PROGRAMACION"));
print(returnH3("Lenguajes de programacion"));
print(returnP("Los lenguajes de programacion necesian ser compilados"));
print(returnH3("Lenguajes de Script"));
print(returnP("Los lenguajes de script necesian ser interpretados"));

print(returnP("PHP se EJECUTA en el SERVIDOR"));

function returnH1 ($varH1) {
  return "<h1>$varH1</h1>";
}
function returnH3 ($varH3) {
  return "<h3>$varH3</h3>";
}

function returnP($textP) {
  return "<p>$textP</p>";
}



?>