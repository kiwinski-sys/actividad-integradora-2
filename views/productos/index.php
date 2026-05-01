<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Lista de Productos</h2>
            <a href="index.php?action=create" class="btn btn-success">Agregar Producto</a>
        </div>

        <?php if (isset($_GET['msg'])): ?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <?php 
                    if ($_GET['msg'] == 'success') echo "Producto creado correctamente.";
                    if ($_GET['msg'] == 'updated') echo "Producto actualizado correctamente.";
                    if ($_GET['msg'] == 'deleted') echo "Producto eliminado correctamente.";
                    if ($_GET['msg'] == 'error') echo "Hubo un error al procesar la solicitud.";
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($productos)): ?>
                            <tr>
                                <td colspan="6" class="text-center">No hay productos registrados.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($productos as $p): ?>
                                <tr>
                                    <td><?php echo $p['id']; ?></td>
                                    <td><?php echo $p['nombre']; ?></td>
                                    <td><?php echo $p['descripcion']; ?></td>
                                    <td>$<?php echo number_format($p['precio'], 2); ?></td>
                                    <td>
                                        <span class="badge <?php echo $p['stock'] > 0 ? 'bg-success' : 'bg-danger'; ?>">
                                            <?php echo $p['stock']; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="index.php?action=edit&id=<?php echo $p['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
                                        <a href="index.php?action=delete&id=<?php echo $p['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este producto?')">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
