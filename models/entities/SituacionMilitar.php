<?php 

require_once $_SERVER["DOCUMENT_ROOT"] . "backendcenso/lib/config.php";

class SituacionMilitar extends ActiveRecord\Model {
    public static $primary_key = "SituacionMilitarID"; 
    public static $table_name = "situacionmilitar";

    // Relación con la tabla Persona
     public static $has_many = array(
        array("Clientes")
    );


    // Otras propiedades y métodos según sean necesarios
}

?>


