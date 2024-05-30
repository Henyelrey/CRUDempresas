<?php
// invocamos a conectar.php para acceder a la base de datos
include("../../includes/conectar.php");
$conexion = conectar();

//RECIBIMOS EL ID DE LA EMPRESA A modificar

$id_empresa = $_REQUEST['id_empresa'];

//Recibimos los datos del formulario de actualizacion

//sentencia SQL para guardar loa datos de la nueva empresa  
$sql = "DELETE FROM empresas WHERE id='$id_empresa'";


//ejecutamos la sentencia sql anterior
mysqli_query($conexion, $sql);

//echo "empresa guardada correctamente";

//redireccionamos al lisatado de empresas para ver los datos modificados
header("Location: listar_empresas.php");