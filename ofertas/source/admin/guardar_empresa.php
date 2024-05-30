<?php
// invocamos a conectar.php para acceder a la base de datos
include("../../includes/conectar.php");
$conexion = conectar();

//Recibimos los datos del formulario
$razon = $_POST['txt_razon_social'];
$ruc = $_POST['txt_ruc'];
$correo = $_POST['txt_correo'];
$direccion = $_POST['txt_direccion'];
$telefono = $_POST['txt_telefono'];
/*
echo '<br>' . $razon;
echo '<br>' . $ruc;
echo '<br>' . $correo;
echo '<br>' . $direccion;
echo '<br>' . $telefono;
*/

//sentencia SQL para guardar loa datos de la nueva empresa  
$sql = "INSERT INTO empresas (razon_social, ruc, correo, direccion, telefono) values ('$razon', '$ruc', '$correo', '$direccion', '$telefono')";


//ejecutamos la sentencia sql anterior
mysqli_query($conexion, $sql);

//echo "empresa guardada correctamente";

//redireccionamos al lisatado de empresas para ver la nueva empresa creada
header("Location: listar_empresas.php");
