CREATE DATABASE Veterinaria;

USE tienda;
CREATE TABLE Animal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    raza TEXT,
    peso DECIMAL(10, 2) NOT NULL,
    altura INT NOT NULL
);

INSERT INTO Animal (nombre, raza, peso, altura) VALUES
('Yuti', 'Yorkshire', 7, 43),
('Sam', 'Doberman', 64, 23),
('Toby', 'San Bernardo', 7, 56),
('Pitu', 'Pastor Alemán', 44, 50),
('Sam', 'Doberman', 64, 23),
('Paco', 'Grifón', 16, 40)
;
