<?php
include("../../includes/header.php")
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Crear nueva Empresa</h1>
        <!-- aqui creamos el formulario para crear una nueva empresa -->
        <!-- llama al archivo guardar_empresa.php -->
        <form method="POST" action="guardar_empresa.php"> 
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Razon social</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txt_razon_social" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">RUC</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txt_ruc" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txt_correo" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Dirección</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txt_direccion" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Teléfono</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txt_telefono" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
        <!-- aqui terminamos el formulario para crear una nueva empresa -->
    </div>
</main>
<?php
include("../../includes/footer.php")
?>

