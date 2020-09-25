<?php
require_once "oop/classes/htmlExport.php";
require_once "oop/classes/jsonExport.php";
require_once "oop/classes/xmlExport.php";


$export="xml";
$handler=$export."Export";

//var_dump($handler);

$handlerObject = new $handler;


//$handlerObject->export();


class exporthandler{

    public function doExport(canExport $handler){

        $handler->export();

    }
}

$object=new exporthandler;
$object->doExport($handlerObject);