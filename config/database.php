<?php
/**
 * Configuración de la conexión a la base de datos utilizando PDO.
 */

class Database {
    private $host = "localhost";
    private $db_name = "inventario_ventas";
    private $username = "root"; // Ajustar según configuración local
    private $password = "";     // Ajustar según configuración local
    public $conn;

    public function __construct() {
        // Soporte dinámico para GitHub Codespaces / Docker
        if (getenv('CODESPACES') == 'true') {
            $this->host = "db";
            $this->password = "root";
        }
    }

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
