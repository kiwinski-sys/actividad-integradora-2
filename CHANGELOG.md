# Changelog

All notable changes to this project will be documented in this file.

## [2026-04-30] - Initial Setup

### Added
- **Project Structure**: Created the following directories and files to support the MVC layered architecture:
    - `config/database.php`: Database connection configuration.
    - `controllers/ProductoController.php`: Logic for product management.
    - `models/Producto.php`: Data model for products.
    - `views/layout/header.php`: Global UI header.
    - `views/layout/footer.php`: Global UI footer.
    - `views/productos/index.php`: Product listing view.
    - `views/productos/create.php`: Product creation view.
    - `views/productos/edit.php`: Product editing view.
    - `assets/css/style.css`: Main stylesheet.
    - `assets/js/main.js`: Main JavaScript file.
    - `database/script.sql`: SQL script for database setup.
    - `index.php`: Application entry point.
    - `README.md`: Project documentation.
    - `CHANGELOG.md`: This file.

### Changed
- **Git Initialization**:
    - Initialized a new Git repository.
    - Renamed default branch to `main`.
    - Created `feature/productos` branch and switched to it for development.

## [2026-04-30] - Database Setup

### Added
- `database/script.sql`: Added SQL script to create the `inventario_ventas` database and `productos` table with validation-ready fields (`nombre`, `precio`, `stock`). Added sample data.
- `config/database.php`: Implemented `Database` class using PDO for secure and flexible MySQL connections.
- `models/Producto.php`: Created `Producto` class with full CRUD logic (Create, Read, Update, Delete) using prepared statements for security.
- `controllers/ProductoController.php`: Implemented `ProductoController` to manage traffic between the Model and Views, including validation logic (e.g., non-negative stock, positive price).
- `views/layout/header.php` & `footer.php`: Created common UI layouts using Bootstrap 5 for a modern, responsive design.
- `views/productos/index.php`: Built the product listing table with status badges and action buttons.
- `views/productos/create.php` & `edit.php`: Developed forms for creating and updating products with validation feedback.
- `index.php`: Updated to serve as the main application router, handling URL parameters for CRUD actions.
- `README.md`: Completed professional documentation including installation steps and system description.

### Changed
- **Branch Management**: Merged `feature/productos` into `main` after completing development.
- `config/database.php`: Updated the `Database` class constructor to dynamically support GitHub Codespaces by detecting the `CODESPACES` environment variable and adapting credentials.

## [2026-04-30] - GitHub Codespaces Support

### Added
- `.devcontainer/devcontainer.json`: Configured the Codespace with port forwarding and VS Code PHP/SQL extensions.
- `.devcontainer/docker-compose.yml`: Set up dual containers (App + Database) using MariaDB 10.5. Automatically mounts the local database script on initialization.
- `.devcontainer/Dockerfile`: Created an environment based on `php:8.2-apache`, installing PDO extensions and enabling `mod_rewrite`.
