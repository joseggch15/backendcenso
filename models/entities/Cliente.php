<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "backendcenso/lib/config.php";


require_once $_SERVER["DOCUMENT_ROOT"]."backendcenso/models/entities/Cliente.php";
require_once $_SERVER["DOCUMENT_ROOT"]."backendcenso/models/entities/Cuenta.php";
require_once $_SERVER["DOCUMENT_ROOT"]."backendcenso/models/entities/ClienteNatural.php";
require_once $_SERVER["DOCUMENT_ROOT"]."backendcenso/models/entities/Organizacion.php";

class Persona extends ActiveRecord\Model {
    public static $primary_key = "personaid"; 
    public static $table_name = "persona";
    public static $belongs_to = array(
        array("situacionmilitar"),
       
    );
}




