<?php
/*
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

$nombre = readline("Introduce el nombre: ");
$email = readline("Introduce el correo electrónico: ");
$telefono = readline("Introduce el número de teléfono (9 dígitos): ");
$contrasenia = readline("Introduce la contraseña (mínimo 8 caracteres): ");
function validarFormulario($nombre, $email, $telefono, $contrasenia) {
    $errores = [];

    if (empty($nombre) || !preg_match("/^[a-zA-Z\s]+$/", $nombre)) {
        $errores[] = "El nombre es obligatorio y solo debe contener letras y espacios.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico no es válido.";
    }

    if (empty($telefono) || !preg_match("/^\d{9}$/", $telefono)) {
        $errores[] = "El número de teléfono debe contener exactamente 9 dígitos.";
    }

    if (empty($contrasenia) || strlen($contrasenia) < 8) {
        $errores[] = "La contraseña debe tener al menos 8 caracteres.";
    }

    return $errores;
}

$errores = validarFormulario($nombre, $email, $telefono, $contrasenia);

if (empty($errores)) {
    echo "Formulario válido\n";
} else {
    echo "Errores en el formulario:\n";
    foreach ($errores as $error) {
        echo "- " . $error . "\n";
    }
}
*/
//Ejercicio 3. Manipulación de Arrays
echo "\n\n";
echo "Ejercicio 3";
echo "\n";

//Ejercicio 4. Procesador de Texto
echo "\n\n";
echo "Ejercicio 4";
echo "\n";