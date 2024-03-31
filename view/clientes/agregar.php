<?php 
/*
// Mensaje recibido -> Controller 
$msg = @$_REQUEST["msg"]; 
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
</head>

<body>
    <center>
        <h1>AGREGAR CLIENTE</h1>

        <form action="../../controllers/ClienteController.php" method="POST">
            <table>
            <tr>
                    <th style="text-align: right;" class="encabezado">ID PERSONA:</th>
                    <td><input type="text" id="id" name="id" required placeholder="ID de la persona"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">NOMBRE:</th>
                    <td><input type="text" id="nombre" name="nombre" required placeholder="Nombre de la persona"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">APELLIDOS:</th>
                    <td><input type="text" id="apellidos" name="apellidos" required placeholder="Apellidos de la persona"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">FECHA DE NACIMIENTO:</th>
                    <td><input type="date" id="fechaNacimiento" name="fechaNacimiento" required></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">LUGAR DE NACIMIENTO ID:</th>
                    <td><input type="text" id="lugarNacimientoID" name="lugarNacimientoID" required placeholder="ID del lugar de nacimiento"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">EDAD:</th>
                    <td><input type="number" id="edad" name="edad" required placeholder="Edad"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">ESTATURA:</th>
                    <td><input type="number" step="0.01" id="estatura" name="estatura" required placeholder="Estatura en metros"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">SEXO:</th>
                    <td>
                        <select id="sexo" name="sexo" required>
                            <option value="">Seleccione...</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                            <option value="O">Otro</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">NIVEL DE ESTUDIOS:</th>
                    <td><input type="text" id="nivelEstudios" name="nivelEstudios" required placeholder="Nivel de estudios"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">SITUACIÓN MILITAR ID:</th>
                    <td><input type="text" id="situacionMilitarID" name="situacionMilitarID" required placeholder="ID de la situación militar"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">DNI:</th>
                    <td><input type="text" id="dni" name="dni" required placeholder="Documento Nacional de Identidad"></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: right;" class="buttons">
                        <input type="submit" id="accion" name="accion" value="Guardar">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" id="clean" value="Limpiar">
                    </td>
                </
            </table>
        </form>
        <span><?= ($msg != NULL || isset($msg)) ? $msg : "" ?></span>
    </center>
</body>
</html>
*/

 
// Mensaje recibido -> Controller 
$msg = @$_REQUEST["msg"]; 
?> 

<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="with=device-with, initial-scale=1.0">
    <title>Registro de Persona</title>
    <link rel="stylesheet" href="/backendcenso/view/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <center>
        <h1>AGREGAR PERSONA</h1>

        <form action="../../controllers/ClienteController.php" method="POST">
            <table>
                <tr>
                    <th style="text-align: right;" class="encabezado">ID PERSONA:</th>
                    <td><input type="text" id="id" name="id" required placeholder="ID de la persona"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">NOMBRE:</th>
                    <td><input type="text" id="nombre" name="nombre" required placeholder="Nombre de la persona"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">APELLIDOS:</th>
                    <td><input type="text" id="apellidos" name="apellidos" required placeholder="Apellidos de la persona"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">FECHA DE NACIMIENTO:</th>
                    <td><input type="text" id="fechaNacimiento" name="fechaNacimiento" required></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">LUGAR DE NACIMIENTO ID:</th>
                    <td><input type="text" id="lugarNacimientoID" name="lugarNacimientoID" required placeholder="ID del lugar de nacimiento"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">EDAD:</th>
                    <td><input type="text" id="edad" name="edad" required placeholder="Edad"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">ESTATURA:</th>
                    <td><input type="text" step="0.01" id="estatura" name="estatura" required placeholder="Estatura en metros"></td>
                </tr>

                 <tr>
                    <th style="text-align: right;" class="encabezado">SEXO:</th>
                    <td><input type="text" step="0.01" id="sexo" name="sexo" required placeholder="sexo en textp"></td>
                </tr>

            

            

                <tr>
                    <th style="text-align: right;" class="encabezado">NIVEL DE ESTUDIOS:</th>
                    <td><input type="text" id="nivelEstudios" name="nivelEstudios" required placeholder="Nivel de estudios"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">SITUACIÓN MILITAR ID:</th>
                    <td><input type="text" id="situacionMilitarID" name="situacionMilitarID" required placeholder="ID de la situación militar"></td>
                </tr>

                <tr>
                    <th style="text-align: right;" class="encabezado">DNI:</th>
                    <td><input type="text" id="dni" name="dni" required placeholder="Documento Nacional de Identidad"></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: right;" class="buttons">
                        <input type="submit" id="accion" name="accion" value="Guardar">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" id="clean" value="Limpiar">
                    </td>
                </tr>
            </table>
        </form>
        <span><?= ($msg != NULL || isset($msg)) ? $msg : "" ?></span>
    </center>
</body>
</html>

