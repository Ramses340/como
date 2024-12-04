<!-- Views/usuarios/create -->

<?php $this->extend("plantilla"); //plantilla que usaremos?>

<?php $this->section("titulo"); ?> 
Nuevo Pedido
<?php $this->endSection(); ?> 
Datos

<?php $this->section("content"); ?>

<div class="card-header">
<h3 class="card-title"> Datos </h3>
</div>

<form action ="?/usuarios/store" method="POST" name="usuarioForm"  >

    <div class ="mb-3">

        <label class="form-label" for="">usuario id</label>
        <input class="form-control" type="text" name="usuario_id" required>
    </div>



    <div class ="mb-3">
        <label class="form-label" for="">evento id</label>
        <input class="form-control" type="text" name="evento_id" required>
    </div>



    <div class ="mb-3">
        <label class="form-label" for="">lista productos</label>
        <input class="form-control" type="text" name="lista_productos" required>
    </div>

    <div class ="mb-3">
        <label class="form-label" for="">total</label>
        <input class="form-control" type="text" name="total" required>
    </div>
    
    <div class ="mb-3">
        <label class="form-label" for="">Estado</label>
        <input class="form-control" type="text" name="estado" required>
    </div>

    <div class ="mb-3">
        <label class="form-label" for="">Fecha de pedido</label>
        <input class="form-control" type="date" name="create_at" required>
    </div>
    
    <div class ="mb-3">
        <label class="form-label" for="">Fecha Salida</label>
        <input class="form-control" type="date" name="update_at" required>
    </div>
    

    <button class="btn btn-success" type="submit"> Crear Pedido</button>

</form>



<?php $this->endSection(); ?>