<?php
//Msg del controlador: 
session_start();

require_once $_SERVER["DOCUMENT_ROOT"] . "backendcenso/models/entities/Cliente.php";
$msg = @$_REQUEST["msg"];
$c = @$_SESSION["cliente.find"];
$c = unserialize($c);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="with=device-with, initial-scale=1.0">
    <title>Sistema Bancario</title>
    <link rel="stylesheet" href="/backendcenso/view/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="../js/validaciones_cliente.js"></script>
</head>

<body>
    <center>
        <h1>BUSCAR CLIENTE</h1>

        <form action="../../controllers/ClienteController.php" method="POST">
            <table>
                <!-- 
<tr>
  <th style="text-align: right;" class="encabezado">ID BASE DE DATO:</th>
  <td><input type="text" id="id" name="id" value="<?= @$c->id ?>" required placeholder="Codigo del cliente"></td>
</tr> 
-->
                <tr>
                    <th style="text-align: right;" class="encabezado">ID BASE DE DATO:</th>
                    <td><input type="text" id="id" name="id" value="<?= @$c->id ?>"
                            placeholder="Codigo del cliente"></td>
                </tr>
                <tr>
                    <th style="text-align: right;" class="encabezado">DNI:</th>
                    <td><input type="text" id="dni" name="dni" value="<?= @$c->dni ?>" placeholder="Ingrese DNI"></td>
                </tr>
                <tr>
                    <th style="text-align: right;" class="encabezado">NOMBRE:</th>
                    <td><input type="text" id="nombre" name="nombre" value="<?= @$c->nombre ?>"
                            placeholder="Ingrese Nombre"></td>
                </tr>




                <tr>
                    <td>&nbsp</td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: right;" class="buttons">
                        <input type="submit" id="accion" name="accion" value="Buscar">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" id="clean" value="Limpiar">
                        <input type="submit" id="editar" name="accion" value="Editar" disabled>
                        <input type="submit" id="eliminar" name="accion" value="Eliminar" disabled>

                    </td>
                </tr>
            </table>
        </form>
        <span>
            <?= ($msg != NULL || isset($msg)) ? $msg : "" ?>
        </span>
    </center>
    <script>
        habilitarBotones();
        confirmarOperacion();
    </script>
</body>

</html>