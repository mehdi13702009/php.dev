<?php

//echo __DIR__;
require_once "../db.php";

class user extends db{

    public $table;

    public function __construct(){

        $this->table='users';
        
}
}

$user1 = new user();
var_dump($user1);
//$user1->find(2);
