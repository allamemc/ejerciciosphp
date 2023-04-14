CREATE DATABASE examen_allam
    DEFAULT CHARACTER SET = 'utf8mb4';

CREATE OR REPLACE TABLE examen_allam.productos(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    unidades int,
    fecha date
);