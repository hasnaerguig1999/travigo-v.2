<?php
require_once './database/DB.php';
class Voyage{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM voyages');
        return $stmt->fetchAll();
        $stmt->close(); 
        $stmt = null;

    }
}

?>