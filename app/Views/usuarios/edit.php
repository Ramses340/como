<!-- Views/usuario/edit -->

<!-- View/usuario/create -->

<?php $this->extend("plantilla"); ?>

<?php $this->section("titulo"); ?>
Editar Pedidos
<?php $this->endSection(); ?>
<?php $this->section("content"); ?>
    <section class="row">
        <div class ="col-12 card">
            <div class="card-header">
            <h3 class="card-title">Datos Del Pedido</h3>
            </div>
            <div class="card-body">


<form action="?/usuarios/<?= $usuario["id"]; ?>/update" method="POST" name="usuarioForm"  >

<div class ="mb-3">
        <label class="form-label" for="">ID</label>
        <input class="form-control" type="text" name="id" value="<?= $usuario["id"]; ?>" required>
    </div>

    <div class ="mb-3">
        <label class="form-label" for="">Usuario ID</label>
        <input class="form-control" type="text" name="usuario_id" value="<?= $usuario["usuario_id"]; ?>" required>
    </div>


    <div class ="mb-3">
        <label class="form-label" for="">Evento ID</label>
        <input class="form-control" type="text" name="evento_id" value="<?= $usuario["evento_id"]; ?>" required>
    </div>


    <div class ="mb-3">
        <label class="form-label" for="">Lista de productos</label>
        <input class="form-control" type="text" name="lista_productos" value="<?= $usuario["lista_productos"]; ?>" readonly>
    </div>


    <div class ="mb-3">
        <label class="form-label" for="">Total</label>
        <input class="form-control" type="text" name="total" value="<?= $usuario["total"]; ?>" required>
    </div>

    <div class ="mb-3">
        <label class="form-label" for="">Estado</label>
        <input class="form-control" type="text" name="estado" value="<?= $usuario["estado"]; ?>" required>
    </div>

    <div class ="mb-3">
        <label class="form-label" for="">Fecha de creacion</label>
        <input class="form-control" type="text" name="created_at" value="<?= $usuario["created_at"]; ?>" required>
    </div>

    <div class ="mb-3">
        <label class="form-label" for="">Fecha de salida</label>
        <input class="form-control" type="text" name="updated_at" value="<?= $usuario["updated_at"]; ?>" required>
    </div>

    <button class="btn btn-success" type="submit"> Editar</button>
</form> 
        </div>

    </section>





    

    <?php $this->endSection(); ?>
