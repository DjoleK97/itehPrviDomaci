<?php
class Broker{

    private $rezultat;
    public $mysqli;
    private static $broker;
   
    
    public function getError(){
        return $this->mysqli->error;
    }
    public function getRezultat(){
        return $this->rezultat;
    }
    private function __construct(){
        $this->mysqli = new mysqli("localhost", "root", "", "student");
        $this->mysqli->set_charset("utf8");
    }

    public static function getBroker(){
        if(!isset($broker)){
            $broker=new Broker();
        }
        return $broker;
    }
    public function izvrsiUpit($upit){
        $this->rezultat= $this->mysqli->query($upit);
    }
  
}

?>