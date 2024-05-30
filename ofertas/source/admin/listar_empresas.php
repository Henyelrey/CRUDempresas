<?php
include("../../includes/header.php");
include("../../includes/conectar.php");
$conexion = conectar();
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Listado de Empresas</h1>
        <?php
        // sentencia sql para extraer empresas
        $sql = "SELECT * FROM empresas";
        $registros = mysqli_query($conexion, $sql); //ejecuta las sentencia sql

        //poner el codigo html en un echo para que funcione
        echo '<button class="btn btn-outline-secondary" onClick="f_crear_empresa()">Crear empresa</button>';


        //tabla para mostrar la tabla
        echo '<table class="table table-secondary table-striped">'; //inicio de la tabla html
        //encabezados de tabla
        echo '<th> Razón Social</th>';
        echo '<th> RUC</th>';
        echo '<th> Telefono</th>';
        echo '<th> Correo</th>';
        echo '<th> Dirección</th>';       
        echo '<th> acciones</th>';
        
        
        //bucle para recorrer todos los registros
        while ($fila = mysqli_fetch_assoc($registros)) {
            echo '<tr>'; //inicion fila
            echo '<td>' . $fila['razon_social'] . '</td>';
            echo '<td>' . $fila['ruc'] . '</td>';
            echo '<td>' . $fila['telefono'] . '</td>';
            echo '<td>' . $fila['correo'] . '</td>';
            echo '<td>' . $fila['direccion'] . '</td>';           
            echo '<td>';
                echo '<button class="btn btn-outline-dark mx-2" onClick="f_editar_empresa('.$fila['id'].')">Editar</button>';
                echo '<button class="btn btn-outline-danger" onClick="f_eliminar_empresa('.$fila['id'].')">Eliminar</button>';
            echo '</td>';
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
    function f_crear_empresa() {
        //alert("hola");
        //invoco al archivo crear_empresa.php
        location.href = "crear_empresa.php";
    }
</script>

<script>
    function f_editar_empresa(idEmpresa){
        //alert("Se detecto click en la empresa "+idEmpresa);
        //invocamos a editar empresa
        location.href = "editar_empresa.php?id_empresa="+idEmpresa;
    }
</script>
<script>
    function f_eliminar_empresa(idEmpresa){
        if(confirm("¿Estas seguro de eliminar este registro?")){
            location.href = "eliminar_empresa.php?id_empresa="+idEmpresa;
        }else{
            alert("no se ha eliminado nigun registro");
        }
    }
</script>