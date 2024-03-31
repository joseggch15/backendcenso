<?php

//Msg del controlador: 
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "backendcenso/models/entities/Cliente.php";
$msg = @$_REQUEST["msg"];
$c = @$_SESSION["persona.all"];
$c = unserialize($c);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="with=device-with, initial-scale=1.0">
    <title>Sistema Bancario</title>
    <link rel="stylesheet" href="/backendcenso/view/css/styles_listar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <center>
        <h1>REPORTE DE CENSO</h1>
        <hr>
        <?php
        if (count($c) <= 0) {
            ?>
            <span style="color: #900D40; background-color: #FAD7CE;">
                No existen clientes registrados
            </span>
            <?php
        } else {
            ?>
            <fieldset style="width: 40%">
                <legend>Información persona: </legend>
                <table>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Lugar Nacimiento ID</th>
                        <th>Edad</th>
                        <th>Estatura</th>
                        <th>Sexo</th>
                        <th>Nivel de Estudios</th>
                        <th>Situación Militar ID</th>
                        <th>DNI</th>
                    </tr>

                    <?php
                    $c = Persona::find('all');
                    foreach ($c as $i => $persona) {
                        ?>
                        <tr style="text-align: left;">
                            <td>
                                <?= ($i + 1) ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($persona->nombre) ?>
                            <td>
                                <?= htmlspecialchars($persona->apellidos) ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($persona->fechanacimiento) ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($persona->lugarnacimientoid) ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($persona->edad) ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($persona->estatura) ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($persona->sexo) ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($persona->nivelestudios) ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($persona->situacionmilitarid) ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($persona->dni) ?>
                            </td>
                            </td>

                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </fieldset>
            <?php
        }
        ?>

        <span style="color:red;">
            <?= ($msg != NULL || isset($msg)) ? $msg : "" ?>
        </span>

    </center>