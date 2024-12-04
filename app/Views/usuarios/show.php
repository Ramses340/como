<!-- View/usuario/create -->

<?php $this->extend("plantilla"); ?>

<?php $this->section("titulo"); ?>
Info Pedidos
<?php $this->endSection(); ?>
<?php $this->section("content"); ?>
    <section class="row">
        <div class ="col-12 card">
            <div class="card-header">
            <h3 class="card-title"> <?= $usuario["id"]; ?> </h3>
            </div>
            <div class="card-body">

            <ul>
            <li> <b>Usuario ID: </b> <?= $usuario["usuario_id"]?> </li> 
            <li> <b>Evento ID: </b> <?= $usuario["evento_id"]?> </li> 
            <li> <b>Lista productos: </b> <?= $usuario["lista_productos"]?> </li>
            <li> <b>Total: </b> <?= $usuario["total"]?> </li> 
            <li> <b>Estado: </b> <?= $usuario["estado"]?> </li> 
            <li> <b>Fecha de creación: </b> <?= $usuario["created_at"]?> </li> 
            <li> <b>Fecha de salida : </b> <?= $usuario["updated_at"]?> </li> 

            </ul>

        </div>

    </section>





    

    <?php $this->endSection(); ?>