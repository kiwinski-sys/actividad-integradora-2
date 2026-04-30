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
