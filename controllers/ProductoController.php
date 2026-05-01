<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Producto.php';

class ProductoController {
    private $db;
    private $producto;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->producto = new Producto($this->db);
    }

    // Listar todos los productos
    public function index() {
        $stmt = $this->producto->read();
        $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include __DIR__ . '/../views/productos/index.php';
    }

    // Mostrar formulario de creación
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->producto->nombre = $_POST['nombre'];
            $this->producto->descripcion = $_POST['descripcion'];
            $this->producto->precio = $_POST['precio'];
            $this->producto->stock = $_POST['stock'];

            // Validaciones básicas (según PDF)
            if (!empty($this->producto->nombre) && $this->producto->precio > 0 && $this->producto->stock >= 0) {
                if ($this->producto->create()) {
                    header("Location: index.php?action=index&msg=success");
                } else {
                    $error = "No se pudo crear el producto.";
                    include __DIR__ . '/../views/productos/create.php';
                }
            } else {
                $error = "Por favor, complete todos los campos correctamente.";
                include __DIR__ . '/../views/productos/create.php';
            }
        } else {
            include __DIR__ . '/../views/productos/create.php';
        }
    }

    // Mostrar formulario de edición
    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->producto->id = $id;
            $this->producto->nombre = $_POST['nombre'];
            $this->producto->descripcion = $_POST['descripcion'];
            $this->producto->precio = $_POST['precio'];
            $this->producto->stock = $_POST['stock'];

            if (!empty($this->producto->nombre) && $this->producto->precio > 0 && $this->producto->stock >= 0) {
                if ($this->producto->update()) {
                    header("Location: index.php?action=index&msg=updated");
                } else {
                    $error = "No se pudo actualizar el producto.";
                    include __DIR__ . '/../views/productos/edit.php';
                }
            } else {
                $error = "Datos inválidos.";
                include __DIR__ . '/../views/productos/edit.php';
            }
        } else {
            $this->producto->id = $id;
            $this->producto->readOne();
            include __DIR__ . '/../views/productos/edit.php';
        }
    }

    // Eliminar producto
    public function delete($id) {
        $this->producto->id = $id;
        if ($this->producto->delete()) {
            header("Location: index.php?action=index&msg=deleted");
        } else {
            header("Location: index.php?action=index&msg=error");
        }
    }
}
?>
