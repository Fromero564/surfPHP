<?php

 require("Model/Conexion.php");

 $con = New Conexion();

 $productos = $con->getProducts();


 require("Views/shop.php");

?>