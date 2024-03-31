<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "backendcenso/models/entities/Cliente.php";

class ClienteController
{
    //Métodos para gestionar peticiones desde la vista 

    public static function ejecutarAccion()
    {
        $accion = @$_REQUEST["accion"];

        //Estructura de control 
        switch ($accion) {
            case "Guardar":
                //Método guardar
                ClienteController::guardar();
                break;

            case "Buscar":
                ClienteController::buscar();
                break;

            case "Editar":
                ClienteController::editar();
                break;

            case "Eliminar":
                ClienteController::eliminar();
                break;

            //case "Listar_todo":
            //  SucursalController::listar_todo();
            // break;

            default:
                header("Location: ../view/error.php?msg=Accion no permitida");
                exit;
        }
    }



    //Logica del método
    public static function guardar()
    {
        //Datos del form
        /*
        $id = @$_REQUEST["id"];
        $nombre = @$_REQUEST["nombre"];
        $cliente_natural_id = @$_REQUEST["nat"];
        $organizacion_id = @$_REQUEST["org"];
        

        

        $c = new Cliente(); */
        // Datos del formulario
        $id = @$_REQUEST["id"];
        $nombre = @$_REQUEST["nombre"];
        $apellidos = @$_REQUEST["apellidos"];
        $fechaNacimiento = @$_REQUEST["fechaNacimiento"];
        $lugarNacimientoID = @$_REQUEST["lugarNacimientoID"];
        $edad = @$_REQUEST["edad"];
        $estatura = @$_REQUEST["estatura"];
        $sexo = @$_REQUEST["sexo"];
        $nivelEstudios = @$_REQUEST["nivelEstudios"];
        $situacionMilitarID = @$_REQUEST["situacionMilitarID"];
        $dni = @$_REQUEST["dni"];


        $c = new Persona();
        $c->personaid = $id; // Suponiendo que $id se obtenga de alguna parte, aunque normalmente esto sería autoincremental y no asignado manualmente.
        $c->nombre = $nombre;
        $c->apellidos = $apellidos; // Necesitarías tener una variable $apellidos.
        $c->fechanacimiento = $fechaNacimiento; // Necesitarías tener una variable $fechaNacimiento.
        $c->lugarnacimientoid = $lugarNacimientoID; // Necesitarías tener una variable $lugarNacimientoID que coincida con un 'LugarID' válido.
        $c->edad = $edad; // Necesitarías tener una variable $edad.
        $c->estatura = $estatura; // Necesitarías tener una variable $estatura.
        $c->sexo = $sexo; // Necesitarías tener una variable $sexo.
        $c->nivelestudios = $nivelEstudios; // Necesitarías tener una variable $nivelEstudios.
        $c->situacionmilitarid = $situacionMilitarID; // Necesitarías tener una variable $situacionMilitarID que coincida con un 'SituacionMilitarID' válido.
        $c->dni = $dni; // Necesitarías tener una variable $dni.


        //Intentar guarda la sucursal en la bd
        try {
            $c->save();  #Operación guardar en ld bd
            $total = @Persona::count(); #Conteo del total de sucursales
            $msg = "Persona guardado, Total: $total";
            header("Location: ../view/clientes/agregar.php?msg=$msg"); #Al finalizar la operación, se redirecciona a la pag guardar
            exit;
        } catch (Exception $error) {
            if (strstr($error->getMessage(), "Duplicate")) {
                $msg = "El cliente ya fue ingresada al sistema";
            } else {
                $msg = "Ocurrió un error al guardar el cliente";
            }

            header("Location: ../view/clientes/agregar.php?msg=$msg"); #Al finalizar la operación, se redirecciona a la pag guardar
            exit;
        }
    }

    public static function buscar()
    {
        $id = @$_REQUEST["id"];

        //Intentamos buscar la sucursal en la bd 
        try {
            $c = Persona::find($id);

            //Colocamos la sucursal en la sesion creada
            $_SESSION["persona.find"] = serialize($c);
            $msg = "Persona encontrado";

            //Redir a la pagina buscar enviandole un mensaje 
            header("Location: ../view/clientes/buscar.php?msg=$msg");
            exit;
        } catch (Exception $error) {
            if (strstr($error->getMessage(), $id)) {
                $msg = "El cliente no existe";
            } else {
                $msg = "Ocurrio un error al buscar el cliente";
            }

            $_SESSION["persona.find"] = NULL;
            header("Location: ../view/clientes/buscar.php?msg=$msg");
            exit;
        }
    }

    public static function editar()
    {
        //Primero se busca la sucursal
        $id = @$_REQUEST["id"];

        //Obtener la sucursal guardado en sesion 
        $c = @$_SESSION["persona.find"];

        //Convertir a objeto
        $c = unserialize($c);

        if ($c->id != $id) {
            $msg = "El codigo no corresponde al cliente consultada";
            header("Location: ../view/clientes/buscar.php?msg=$msg");
        }

        //Nuevos campos en el formulari

        $id = @$_REQUEST["id"];
        $nombre = @$_REQUEST["nombre"];
        $apellidos = @$_REQUEST["apellidos"];
        $fechanacimiento = @$_REQUEST["fechanacimiento"];
        $lugarnacimientoid = @$_REQUEST["lugarnacimientoid"];
        $edad = @$_REQUEST["edad"];
        $estatura = @$_REQUEST["estatura"];
        $sexo = @$_REQUEST["sexo"];
        $nivelestudios = @$_REQUEST["nivelestudios"];
        $situacionmilitarid = @$_REQUEST["situacionmilitarid"];
        $dni = @$_REQUEST["dni"];

        //Lo colocamos en la sucursal buscada
        /*
        $c->cliente_natural_id = !empty($cliente_natural_id) ? $cliente_natural_id : null;

        */
        $c->id = !empty($id) ? $id : null;
        $c->organizacion_id = !empty($organizacion_id) ? $organizacion_id : null;
        $c->nombre = $nombre;
        $c->apellidos = $apellidos;
        $c->fechanacimiento = $fechanacimiento;
        $c->LugarNacimientoid = $lugarnacimientoid;
        $c->edad = $edad;
        $c->estatura = $estatura;
        $c->sexo = $sexo;
        $c->nivelestudios = $ $nivelestudios;
        $c->situacionmilitarid = $situacionmilitarid;
        $c->dni = $dni;




        try {
            //Guardar la sucursal con los datos actualizados 
            $c->save();

            //Serializamos el sucursal nuevamente y lo guardamos en la sesión 
            $_SESSION["persona.find"] = serialize($c);
            $msg = "Cliente editado";

            header("Location: ../view/clientes/buscar.php?msg=$msg");
            exit;

        } catch (Exception $error) {
            if (strstr($error->getMessage(), $id)) {
                $msg = "El cliente no existe";
            } else {
                $msg = "Se encontró un error al editar el cliente";
            }

            $_SESSION["cliente.find"] = NULL;
            header("Location: ../view/clientes/buscar.php?msg=$msg");
            exit;
        }
    }

    public static function eliminar()
    {
        //Primero se busca la sucursal
        $id = @$_REQUEST["id"];

        //Obtener la sucursal  guardado en sesion 
        $c = @$_SESSION["persona.find"];

        //Convertir a objeto
        $c = unserialize($c);

        if ($c->id != $id) {
            $msg = "El codigo no corresponde al cliente consultado";
            header("Location: ../view/clientes/buscar.php?msg=$msg");
        }

        try {
            $c->delete();
            //Eliminamos la sesion de esta sucursal 
            $c = @$_SESSION["persona.find"] = null;
            $total = @Persona::count();
            $msg = "Cliente eliminado, Total: $total";

            header("Location: ../view/clientes/buscar.php?msg=$msg");
            exit;
        } catch (Exception $error) {
            if (strstr($error->getMessage(), $id)) {
                $msg = "El cliente no existe";
            } else {
                $msg = "Se encontró un error al eliminar el cliente";
            }

            $_SESSION["cliente.find"] = NULL;
            header("Location: ../view/clientes/buscar.php?msg=$msg");
            exit;
        }

    }

}

ClienteController::ejecutarAccion();
