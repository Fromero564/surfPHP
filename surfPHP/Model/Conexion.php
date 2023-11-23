<?php

class Conexion {
    private $con;

    public function __construct() {
        $this->con = new mysqli("localhost", "root", "", "nukumoi_db");

        if ($this->con->connect_error) {
            die("Error de conexión: " . $this->con->connect_error);
        }
    }

    private function getProductosByCategory($category) {
        $stmt = $this->con->prepare("SELECT * FROM productos WHERE category = ?");
        $stmt->bind_param("s", $category);
        $stmt->execute();

        $result = $stmt->get_result();
        $productos = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();

        return $productos;
    }

    public function getProductsMen() {
        return $this->getProductosByCategory('man');
    }

    public function getProductsWomen() {
        return $this->getProductosByCategory('woman');
    }

    public function getProductsChildren() {
        return $this->getProductosByCategory('child');
    }

    public function getProductsHats() {
        return $this->getProductosByCategory('hat');
    }
}
?>
