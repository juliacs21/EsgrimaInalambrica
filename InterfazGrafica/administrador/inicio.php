<?php include('templates/cabecera.php'); ?>

<div class="col-md-12">

    <div class="jumbotron">
        <h1 class="display-3">Bienvenidos <?php echo $nombreUsuario; ?> </h1>
        <p class="lead">Permite la administración de los resultados de los partidos de esgrima del sitio web</p>
        <hr class="my-2">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="seccion/productos.php" role="button">Administrar resultados</a>
        </p>
    </div>
</div>

<?php include('templates/pie.php'); ?>