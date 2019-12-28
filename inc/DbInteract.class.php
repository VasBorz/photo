<?php
include_once 'ConnDb.class.php';

class DbInteract extends ConnDb{

    public function __construct(){
        parent::__construct();
    }

     public function get($query){
        $stmt = self::getConn()->query($query);
        return $stmt->fetchAll();
    }
    public function insert($query){
        self::getConn()->query($query);
    }


}