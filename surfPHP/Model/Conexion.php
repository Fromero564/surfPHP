<?php

class Conexion{
    private $con;

    public function __construct() { 
        $this->con = new mysqli("localhost","root","","nukumoi_db");
    }
    public function getProductsMen(){
        $query = $this ->con->query("SELECT * FROM productos WHERE category='hombre'");
        
        $i = 0;
        $retorno = [];
        while($fila = $query->fetch_assoc()){   
            $retorno[$i] = $fila;
            $i++;
        }  
        return $retorno;
    }

    public function getProductsWomen(){
        $query = $this ->con->query("SELECT * FROM productos WHERE category='mujer'");
        
        $i = 0;
        $retorno = [];
        while($fila = $query->fetch_assoc()){   
            $retorno[$i] = $fila;
            $i++;
        }  
        return $retorno;
    }

    public function getProductsChildren(){
        $query = $this ->con->query("SELECT * FROM productos WHERE category='infante'");
        
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