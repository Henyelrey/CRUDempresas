<?php
// invocamos a conectar.php para acceder a la base de datos
include("../../includes/conectar.php");
$conexion = conectar();

//RECIBIMOS EL ID DE LA EMPRESA A modificar

$id_empresa = $_POST['txt_id_empresa'];

//Recibimos los datos del formulario de actualizacion
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
$sql = "UPDATE empresas SET 
        razon_social = '$razon',
        ruc          ='$ruc',
        correo       ='$correo',
        direccion    ='$direccion',
        telefono     ='$telefono'
        WHERE id='$id_empresa'";


//ejecutamos la sentencia sql anterior
mysqli_query($conexion, $sql);

//echo "empresa guardada correctamente";

//redireccionamos al lisatado de empresas para ver los datos modificados
header("Location: listar_empresas.php");
