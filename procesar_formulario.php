<?php
// Recibir respuestas del formulario
$respuesta1 = $_POST['pregunta1'];
$respuesta2 = $_POST['pregunta2'];
$respuesta3 = $_POST['pregunta3'];
$respuesta4 = $_POST['pregunta4'];
$respuesta5 = $_POST['pregunta5'];

// Inicializar una variable para sumar la puntuación
$puntuacion = 0;

// Asignar puntuaciones según la respuesta
// Pregunta 1
if ($respuesta1 == "Nunca") $puntuacion += 0;
elseif ($respuesta1 == "Mensualmente") $puntuacion += 1;
elseif ($respuesta1 == "Semanalmente") $puntuacion += 2;
elseif ($respuesta1 == "Diariamente o casi diario") $puntuacion += 3;

// Pregunta 2
if ($respuesta2 == "1 o 2") $puntuacion += 0;
elseif ($respuesta2 == "3 o 4") $puntuacion += 1;
elseif ($respuesta2 == "5 o 6") $puntuacion += 2;
elseif ($respuesta2 == "7 o más") $puntuacion += 3;

// Pregunta 3
if ($respuesta3 == "Nunca") $puntuacion += 0;
elseif ($respuesta3 == "Menos de una vez al mes") $puntuacion += 1;
elseif ($respuesta3 == "Mensualmente") $puntuacion += 2;
elseif ($respuesta3 == "Semanalmente") $puntuacion += 3;
elseif ($respuesta3 == "Diariamente o casi diario") $puntuacion += 4;

// Pregunta 4 y 5
if ($respuesta4 == "Sí") $puntuacion += 2;
if ($respuesta5 == "Sí") $puntuacion += 2;

// Evaluar nivel de consumo y redirigir
if ($puntuacion <= 3) {
    header("Location: bajo_consumo.html");
} elseif ($puntuacion <= 4) {
    header("Location: consumo_moderado.html");
} elseif ($puntuacion <= 6) {
    header("Location: consumo_alto.html");
} elseif  ($puntuacion <= 8) {
    header("Location: consumo_alto_riesgo.html");
} elseif  ($puntuacion <= 10) 
exit();
?>