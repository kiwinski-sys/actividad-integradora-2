-- Script para la creación de la base de datos y la tabla de productos

CREATE DATABASE IF NOT EXISTS inventario_ventas;
USE inventario_ventas;

-- Creación de la tabla productos
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Datos de prueba (opcional)
INSERT INTO productos (nombre, descripcion, precio, stock) VALUES
('Laptop HP', 'Laptop de 15 pulgadas, 8GB RAM, 256GB SSD', 750.00, 10),
('Mouse Logi', 'Mouse inalámbrico ergonómico', 25.00, 50),
('Teclado Mecánico', 'Teclado RGB con switches azules', 60.00, 15);
