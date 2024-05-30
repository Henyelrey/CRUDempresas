<?php
// invocamos a conectar.php para acceder a la base de datos
include("../../includes/conectar.php");
$conexion = conectar();

//Recibimos los datos del formulario
$dni = $_POST['txt_dni'];
$nombres = $_POST['txt_nombres'];
$apellidos = $_POST['txt_apellidos'];
$edad = $_POST['txt_edad'];
$correo = $_POST['txt_correo'];
$telefono = $_POST['txt_telefono'];
$direccion = $_POST['txt_direccion'];
$estado_civil = $_POST['txt_estado_civil'];


/*
echo '<br>' . $razon;
echo '<br>' . $ruc;
echo '<br>' . $correo;
echo '<br>' . $direccion;
echo '<br>' . $telefono;
*/

//sentencia SQL para guardar loa datos de la nueva empresa  
$sql = "INSERT INTO postulantes (dni, nombres, apellidos, edad, correo, telefono, direccion, estado_civil)
values ('$dni', '$nombres', '$apellidos', '$edad', '$correo', '$telefono', '$direccion', '$estado_civil')";


//ejecutamos la sentencia sql anterior
mysqli_query($conexion, $sql);

//echo "empresa guardada correctamente";

//redireccionamos al lisatado de empresas para ver la nueva empresa creada
header("Location: listar_postulantes.php");