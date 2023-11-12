<?php

class Conexion{
    private $con;

    public function __construct() { 
        $this->con = new mysqli("localhost","root","","nukumoi_db");
    }
    public function getProductsMen(){
        $query = $this ->con->query("SELECT * FROM productos WHERE category='man'");
        
        $i = 0;
        $retorno = [];
        while($fila = $query->fetch_assoc()){   
            $retorno[$i] = $fila;
            $i++;
        }  
        return $retorno;
    }

    public function getProductsWomen(){
        $query = $this ->con->query("SELECT * FROM productos WHERE category='woman'");
        
        $i = 0;
        $retorno = [];
        while($fila = $query->fetch_assoc()){   
            $retorno[$i] = $fila;
            $i++;
        }  
        return $retorno;
    }

    public function getProductsChildren(){
        $query = $this ->con->query("SELECT * FROM productos WHERE category='child'");
        
        $i = 0;
        $retorno = [];
        while($fila = $query->fetch_assoc()){   
            $retorno[$i] = $fila;
            $i++;
        }  
        return $retorno;
    }
    public function getProductsHats(){
        $query = $this ->con->query("SELECT * FROM productos WHERE category='hat'");
        
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