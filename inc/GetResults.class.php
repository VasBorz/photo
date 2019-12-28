<?php
include_once 'ConnDb.class.php';

class getResults extends ConnDb{

    public function __construct(){
        parent::__construct();
    }

    public function get($query){
        $stmt = self::getConn()->query($query);
        return $stmt->fetch();
    }


}