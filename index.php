<?php
/**
 * Router principal del sistema.
 */
require_once 'controllers/ProductoController.php';

$controller = new ProductoController();

// Determinar la acción a realizar
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        if ($id) {
            $controller->edit($id);
        } else {
            header("Location: index.php?action=index");
        }
        break;
    case 'delete':
        if ($id) {
            $controller->delete($id);
        } else {
            header("Location: index.php?action=index");
        }
        break;
    default:
        $controller->index();
        break;
}
?>
