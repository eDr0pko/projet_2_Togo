CREATE DATABASE IF NOT EXISTS 2n_multi_service CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE 2n_multi_service;
DROP TABLE IF EXISTS candidatures;
DROP TABLE IF EXISTS offres;
DROP TABLE IF EXISTS utilisateurs;


-- Table utilisateurs
CREATE TABLE IF NOT EXISTS utilisateurs (
    mail VARCHAR(100) PRIMARY KEY,
    mot_de_passe VARCHAR(100) NOT NULL
);

-- Table offres
CREATE TABLE IF NOT EXISTS offres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    publiee BOOLEAN DEFAULT FALSE
);

-- Table candidatures
CREATE TABLE IF NOT EXISTS candidatures (
    id INT AUTO_INCREMENT PRIMARY KEY,
    offre_id INT NOT NULL,
    cv VARCHAR(255) NOT NULL,
    lettre TEXT,
    date_candidature DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (offre_id) REFERENCES offres(id) ON DELETE CASCADE
);


INSERT INTO utilisateurs (mail, mot_de_passe) VALUES ('admin@admin.com', '$2y$10$Rk.dHm4vVkjq7d5B8dW7vuU0Psmq4Xvz6z3K06dKhmOyy7diUaDeu');

INSERT INTO offres (titre, description, publiee) VALUES ('Offre 1', 'Description de l offre 1', TRUE);
INSERT INTO offres (titre, description, publiee) VALUES ('Offre 2', 'Description de l offre 2', FALSE);


