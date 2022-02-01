<?php include("template/cabecera.php"); ?>

<?php

include("administrador/config/bd.php");

$sentenciaSQL = $conexion->prepare("SELECT*FROM resultados");
$sentenciaSQL->execute();
$listaResultados = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="row">
<div class="col-md-12">
<table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>Nombre Jugador 1</th>
                <th>Nombre Jugador 2</th>
                <th>Resultado Jugador 1</th>
                <th>Resultado Jugador 2</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaResultados as $resultado) { ?>
                <tr>
                    <td><?php echo $resultado['Jugador1']; ?></td>
                    <td><?php echo $resultado['Jugador2']; ?></td>
                    <td><?php echo $resultado['Resultado1']; ?></td>
                    <td><?php echo $resultado['Resultado2']; ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>


<?php include("template/pie.php"); ?>