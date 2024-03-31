<?php
require_once $_SERVER["DOCUMENT_ROOT"]."backendcenso/lib/orm/ActiveRecord.php";

ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory($_SERVER["DOCUMENT_ROOT"]."backendcenso/models/entities");
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:root@localhost/datacenso'
       //'test' => 'mysql://username:password@localhost/test_database_name',
       //'production' => 'mysql://username:password@localhost/production_database_name'
     )
   );
});

?>