# Sistema Web de Inventario + Ventas Simple

Este proyecto es un sistema web desarrollado en PHP que permite gestionar un inventario de productos y registrar ventas de manera sencilla. El sistema aplica buenas prácticas de programación, una estructura por capas (MVC) y control de versiones con Git.

## Características
- **CRUD de Productos**: Crear, Listar, Editar y Eliminar productos.
- **Validaciones**: Control de stock no negativo y precios mayores a cero.
- **Arquitectura MVC**: Separación clara entre Modelos, Vistas y Controladores.
- **Diseño Responsivo**: Interfaz moderna construida con Bootstrap 5.

## Requisitos
- Servidor local (XAMPP, WAMP o Laragon) con PHP 7.4 o superior.
- MySQL / MariaDB.
- Git instalado.

## Instalación
1. Clona este repositorio en tu carpeta de servidor local (`htdocs` o `www`).
2. Importa el archivo SQL ubicado en `database/script.sql` en tu gestor de base de datos MySQL.
3. Configura las credenciales de tu base de datos en `config/database.php`.
4. Abre el sistema en tu navegador: `http://localhost/integradora`.

## Script SQL (Resumen)
El sistema utiliza una tabla llamada `productos` con la siguiente estructura:
- `id`: Identificador único (Auto-increment).
- `nombre`: Nombre del producto.
- `descripcion`: Detalles del producto.
- `precio`: Valor unitario.
- `stock`: Cantidad disponible.

## Capturas del Sistema
*(Agregue aquí las capturas de pantalla de la lista de productos y los formularios)*

## Usuario de Prueba
El sistema no requiere autenticación por el momento, pero se puede acceder directamente al panel de control de productos desde la página de inicio.

---
**Desarrollado para la Actividad Integradora 2**
