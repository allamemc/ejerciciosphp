CREATE DATABASE actividad3
    DEFAULT CHARACTER SET = 'utf8mb4';

CREATE TABLE actividad3.usuarios(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100),
    password VARCHAR(200)
);