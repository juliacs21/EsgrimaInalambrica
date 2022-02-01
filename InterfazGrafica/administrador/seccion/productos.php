<?php include("../templates/cabecera.php"); ?>

<?php
$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre1 = (isset($_POST['txtNombre1'])) ? $_POST['txtNombre1'] : "";
$txtNombre2 = (isset($_POST['txtNombre2'])) ? $_POST['txtNombre2'] : "";
$txtResultado1 = (isset($_POST['txtResultado1'])) ? $_POST['txtResultado1'] : "";
$txtResultado2 = (isset($_POST['txtResultado2'])) ? $_POST['txtResultado2'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

include("../config/bd.php");

switch ($accion) {
    case "Agregar":

        $sentenciaSQL = $conexion->prepare("INSERT INTO resultados ( Jugador1, Jugador2, Resultado1, Resultado2) VALUES (:nombre1,:nombre2,:resultado1,:resultado2);");
        $sentenciaSQL->bindParam(":nombre1", $txtNombre1);
        $sentenciaSQL->bindParam(":nombre2", $txtNombre2);
        $sentenciaSQL->bindParam("resultado1", $txtResultado1);
        $sentenciaSQL->bindParam("resultado2", $txtResultado2);
        $sentenciaSQL->execute();
        header("Location:productos.php");

        break;

    case "Cancelar":
        header("Location:productos.php");
        break;

    case "Borrar":
        $sentenciaSQL = $conexion->prepare("DELETE FROM resultados WHERE id=:id");
        $sentenciaSQL->bindParam(":id", $txtID);
        $sentenciaSQL->execute();

        header("Location:productos.php");
        break;
}

//Selecciona todos los resultados, los ejecuta y los recupera
$sentenciaSQL = $conexion->prepare("SELECT*FROM resultados");
$sentenciaSQL->execute();
$listaResultados = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="col-md-5">

    <div class="card">

        <div class="card-header">
            Base de datos con resultados
        </div>

        <div class="card-body">

            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" rquired readonly class="form-control" name="txtID" id="txtID" placeholder="ID partida">
                </div>
                <h2>Jugador 1 </h2>
                <div class="form-group">
                    <label for="txtNombre1">Nombre:</label>
                    <input type="text" required class="form-control" name="txtNombre1" id="txtNombre1" placeholder="Nombre jugador 1">
                </div>

                <div class="form-group">
                    <label for="txtResultado1">Resultado Jugador 1:</label>
                    <input type="text" required class="form-control" name="txtResultado1" id="txtResultado1" placeholder="Resultado jugador 1">
                </div>

                <h2>Jugador 2 </h2>
                <div class="form-group">
                    <label for="txtNombre2">Nombre:</label>
                    <input type="text" requiered class="form-control" name="txtNombre2" id="txtNombre2" placeholder="Nombre jugador 2">
                </div>

                <div class="form-group">
                    <label for="txtResultado2">Resultado Jugador 2:</label>
                    <input type="text" required class="form-control" name="txtResultado2" id="txtResultado2" placeholder="Resultado jugador 1">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
                </div>

            </form>
        </div>

    </div>

</div>

<div class="col-md-7">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Jugador 1</th>
                <th>Nombre Jugador 2</th>
                <th>Resultado Jugador 1</th>
                <th>Resultado Jugador 2</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaResultados as $resultado) { ?>
                <tr>
                    <td><?php echo $resultado['ID']; ?></td>
                    <td><?php echo $resultado['Jugador1']; ?></td>
                    <td><?php echo $resultado['Jugador2']; ?></td>
                    <td><?php echo $resultado['Resultado1']; ?></td>
                    <td><?php echo $resultado['Resultado2']; ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="txtID" id="txtID" value="<?php echo $resultado['ID']; ?>" />
                            <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />
                        </form>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

</div>

<?php include("../templates/pie.php"); ?>