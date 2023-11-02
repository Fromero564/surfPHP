<?php

class Conexion{
    private $con;

    public function __construct() { 
        $this->con = new mysqli("localhost","root","","nukumoi_db");
    }
    public function getProducts(){
        $query = $this ->con->query("SELECT * FROM productos");
        
        $i = 0;
        $retorno = [];
        while($fila = $query->fetch_assoc()){   
            $retorno[$i] = $fila;
            $i++;
        }  
        return $retorno;
    }

}


?>