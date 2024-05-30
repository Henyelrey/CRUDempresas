<?php
include("../../includes/header.php");
include("../../includes/conectar.php");
$conexion = conectar();
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Listar postulantes</h1>
        <?php
        // sentencia sql para extraer empresas
        $sql = "SELECT * FROM postulantes";
        $registro = mysqli_query($conexion, $sql); //ejecuta las sentencia sql

        //poner el codigo html en un echo para que funcione
        echo '<button class="btn btn-success" onClick="goku()">Agregar postulante</button>';


        //tabla para mostrar la tabla
        echo '<table class="table table-success table-striped">'; //inicio de la tabla html
        //encabezados de tabla
        echo '<th> DNI</th>';
        echo '<th> Nombres</th>';
        echo '<th> Apellidos</th>';
        echo '<th> Edad</th>';
        echo '<th> Correo</th>';
        echo '<th> Telefono</th>';
        echo '<th> Dirección</th>';
        echo '<th> Estado civil</th>';
        //bucle para recorrer todos los registros
        while ($fila = mysqli_fetch_assoc($registro)) {
            echo '<tr>'; //inicion fila
            echo '<td>' . $fila['dni'] . '</td>';
            echo '<td>' . $fila['nombres'] . '</td>';
            echo '<td>' . $fila['apellidos'] . '</td>';
            echo '<td>' . $fila['edad'] . '</td>';
            echo '<td>' . $fila['correo'] . '</td>';
            echo '<td>' . $fila['telefono'] . '</td>';
            echo '<td>' . $fila['direccion'] . '</td>';
            echo '<td>' . $fila['estado_civil'] . '</td>';

            echo '</tr>'; //fin fila
        }

        echo '</table>'; //fin de la tabla html
        ?>
    </div>
</main>
<?php
include("../../includes/footer.php")
?>

//iniciamos codigo javascript
<script>

    function goku(){
        //alert("chupala");
        //invoco al archivo crear_empresa.php
        location.href="crear_postulante.php";
    }
    
</script>