CREATE DATABASE IF NOT EXISTS test_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE test_db;
DROP TABLE IF EXISTS test_table;



-- Table test_table
CREATE TABLE IF NOT EXISTS test_table (
    mail VARCHAR(100) PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL
);

INSERT INTO utilisateur (mail, mot_de_passe) VALUES ('test@mail.com', '123456');