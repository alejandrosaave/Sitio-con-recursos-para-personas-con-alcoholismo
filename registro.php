<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton registro haya sido presionado
if(isset($_POST['registro'])) {

// Obtener los valores enviados por el formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
// Insertamos los datos en la base de datos
$sql = "INSERT INTO registros (id_registro, nombre, telefono, email, mensaje) VALUES (null, '$nombre', '$telefono', '$email', '$mensaje')";
$resultado = mysqli_query($conexion,$sql);
	if($resultado) {
		// Iserción correcta
		echo "¡Se insertaron los datos correctamente!";
		header("Location:respuesta-registro.html");
	} else {
		// Iserción fallida
		echo "¡No se puede insertar la informacion!"."<br>";
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
}
?>