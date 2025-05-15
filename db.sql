CREATE DATABASE js_php;
USE js_php;

CREATE TABLE filière (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255)
);

CREATE TABLE categorie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    id_filière INT,
    FOREIGN KEY (id_filière) REFERENCES filière(id)
);
INSERT INTO filière (nom) VALUES 
('Informatique'),
('Gestion'),
('Électronique');

INSERT INTO categorie (nom, id_filière) VALUES
-- Informatique categories
('Développement Web', 1),
('Sécurité Informatique', 1),
('Base de Données', 1),

-- Gestion categories
('Comptabilité', 2),
('Marketing', 2),
('Finance', 2),

-- Électronique categories
('Circuits Intégrés', 3),
('Automatisme', 3),
('Robotique', 3);
