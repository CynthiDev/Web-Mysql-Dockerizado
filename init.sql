CREATE TABLE IF NOT EXISTS persona (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50),
  rol ENUM('Alumno', 'Profesor') NOT NULL
);
INSERT INTO persona (nombre, rol) VALUES 
('Cynthia Estefania Choque Galindo', 'Alumno'),
('Guido Vizzotti', 'Alumno'),
('Javier Blanco', 'Profesor');
