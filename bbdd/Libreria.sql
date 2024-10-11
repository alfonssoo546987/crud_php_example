CREATE DATABASE Libreria;

USE Libreria;
CREATE TABLE Libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);

INSERT INTO Libros (nombre, descripcion, precio, stock) VALUES
('Libro de la Selva', 'la historia de Mowli, el niño lobo', 9.99, 30),
('Abierto Hasta el Amanecer', 'Escalofriante historia de vampiros, sexo, alcohol, y drogas', 11.00, 10),
('Buscando a Wally', 'Juego infantil', 7.30, 40),
('La Bibilia', 'Versión de bolsillo', 4.49, 15),
('Juego de Tronos', 'Historia de reyes, nobles, sectas y guerras', 8.49, 15);
