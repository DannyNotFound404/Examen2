create database postes;
go
use postes
go
CREATE TABLE poste (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  direccion VARCHAR(100) NOT NULL,
  departamento VARCHAR(100) NOT NULL,
  municipio VARCHAR(100) NOT NULL,
  referencia VARCHAR(100) NOT NULL,
  longitud VARCHAR(100) NOT NULL
);
