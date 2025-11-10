<?php

//Ejercicio 1. Calculadora
echo "Ejercicio 1";
echo "\n";

$esNum = false;
$esOP = false;

do {
    $num1 = readline("Introduce el primer número: \n");

    if (is_numeric($num1)) {
        $esNum = true;
    } else echo "Por favor, introduce un número válido.\n";

} while (!$esNum || $num1 < 0);
$num1 = floatval($num1);

do {
    $esNum = false;
    $num2 = readline("Introduce el segundo número: \n");

    if (is_numeric($num2)) {
        $esNum = true;
    } else echo "Por favor, introduce un número válido.\n\n";

} while (!$esNum || $num2 < 0);
$num2 = floatval($num2);

do {
    $operador = readline("Introduce la operación (+, -, *, /): \n");

    if ($operador !== '+' && $operador !== '-' && $operador !== '*' && $operador !== '/') {
        echo "Por favor, introduce un número válido.\n\n";
    } else $esOP = true;

} while ($operador !== '+' && $operador !== '-' && $operador !== '*' && $operador !== '/' || !$esOP);

function calculadora($num1, $num2, $operador){
    return match ($operador) {
        '+' => $num1 + $num2,
        '-' => $num1 - $num2,
        '*' => $num1 * $num2,
        '/' => $num2 != 0 ? $num1 / $num2 : 'Error: No se puede dividir por cero',
    };
}

echo "El resultado de la operación " . $operador . " entre " . $num1 . " y " . $num2 . " es: " . calculadora($num1, $num2, $operador);


//Ejercicio 2. Validador de Formularios
echo "\n\n";
echo "Ejercicio 2";
echo "\n";

//Ejercicio 3. Manipulación de Arrays
echo "\n\n";
echo "Ejercicio 3";
echo "\n";

//Ejercicio 4. Procesador de Texto
echo "\n\n";
echo "Ejercicio 4";
echo "\n";