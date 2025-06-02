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
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    offre_id INT NOT NULL,
    cv VARCHAR(255) NOT NULL,
    lettre TEXT,
    date_candidature DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (offre_id) REFERENCES offres(id) ON DELETE CASCADE
);


INSERT INTO utilisateurs (mail, mot_de_passe) VALUES ('admin@admin.com', '$2y$10$Rk.dHm4vVkjq7d5B8dW7vuU0Psmq4Xvz6z3K06dKhmOyy7diUaDeu');

INSERT INTO offres (titre, description, publiee) VALUES (
  'Agent de propreté en milieu hospitalier',
  'Nous recherchons un agent de propreté rigoureux pour assurer le nettoyage et la désinfection des locaux médicaux. Horaires flexibles, formation assurée.',
  TRUE
);

INSERT INTO offres (titre, description, publiee) VALUES (
  'Responsable d’équipe nettoyage industriel',
  'En tant que responsable d’équipe, vous superviserez les opérations de nettoyage sur divers sites industriels. Vous coordonnerez les équipes, assurerez la conformité aux procédures et serez le garant de la qualité des prestations. Une expérience dans l’industrie ou le BTP est un atout majeur. Poste basé à Abidjan avec déplacements fréquents en Côte d’Ivoire. Véhicule de service fourni.',
  TRUE
);

INSERT INTO offres (titre, description, publiee) VALUES (
  'Agent de propreté de nuit',
  'Poste de nuit. Entretien des bureaux et zones communes d’un complexe administratif. Autonomie, discrétion et ponctualité exigées.',
  TRUE
);
INSERT INTO offres (titre, description, publiee) VALUES (
  'Agent de sécurité événementiel',
  'Vous serez en charge de la surveillance et de la sécurité lors d’événements privés ou publics (concerts, foires, conférences…). Une bonne présentation et un excellent sens du contact sont requis.',
  TRUE
);

INSERT INTO offres (titre, description, publiee) VALUES (
  'Superviseur sécurité site industriel',
  'Sous la responsabilité du chef de la sécurité, vous coordonnez une équipe d’agents sur un site sensible. Vous intervenez sur les rondes, les incidents et la rédaction des rapports. Expérience exigée.',
  FALSE
);

INSERT INTO offres (titre, description, publiee) VALUES (
  'Agent cynophile de sécurité',
  'Accompagné de votre chien, vous assurez la prévention des intrusions et la dissuasion. Intervention en journée ou nuit selon les besoins. Une formation spécifique cynophile est requise.',
  TRUE
);
INSERT INTO offres (titre, description, publiee) VALUES (
  'Opérateur vidéosurveillance',
  'Votre mission : surveiller plusieurs sites à distance via notre centre de vidéosurveillance. Vous détectez toute anomalie ou intrusion et en assurez le suivi avec les agents sur le terrain.',
  TRUE
);

INSERT INTO offres (titre, description, publiee) VALUES (
  'Technicien installation caméras de sécurité',
  'Installation et configuration de systèmes de vidéosurveillance chez nos clients. Connaissance en électricité et réseaux IP souhaitée.',
  TRUE
);
INSERT INTO offres (titre, description, publiee) VALUES (
  'Chargé(e) de mission Hygiène & Sécurité',
  'Dans le cadre du développement de notre pôle Hygiène et Sécurité, 2N MULTI SERVICE recrute un(e) Chargé(e) de mission motivé(e) et polyvalent(e). Vous serez amené(e) à intervenir sur divers projets d’envergure portant sur la gestion de la propreté des sites clients, la mise en œuvre des protocoles de sécurité et la formation du personnel.

Vos missions principales seront les suivantes :
- Participer à l’analyse des besoins des clients en matière d’hygiène et de sécurité.
- Proposer des solutions sur mesure tenant compte des spécificités des lieux (bureaux, industries, centres médicaux…).
- Déployer et faire respecter les protocoles de nettoyage, de désinfection, d’élimination des déchets.
- Réaliser des audits de sécurité et formuler des recommandations.
- Accompagner les chefs d’équipe terrain et les agents dans la montée en compétences.

Vous travaillerez en étroite collaboration avec les équipes opérationnelles, les responsables qualité et les partenaires externes. Vous serez également force de proposition sur les innovations (matériels, méthodes, produits) et sur les projets à impact social ou environnemental.

Profil recherché :
- Bac+3 à Bac+5 dans les domaines HSE, QSE, ou management des services.
- Expérience confirmée dans une entreprise de services ou de propreté.
- Connaissances des normes ISO 45001 et ISO 14001 appréciées.
- Excellente communication orale et écrite, capacité d’écoute et leadership naturel.

Pourquoi rejoindre 2N MULTI SERVICE ?
- Une entreprise en pleine croissance, portée par une mission sociale et environnementale forte.
- Une équipe dynamique, impliquée et soudée.
- Des projets concrets et variés, sur tout le territoire.

Salaire : selon profil. Mutuelle. Prime de performance. Téléphone professionnel fourni. Déplacements ponctuels à prévoir.

Lieu de travail : Dakar / Abidjan / Cotonou selon affectation.

Rejoignez-nous pour faire de la propreté et de la sécurité un levier de bien-être collectif.',
  TRUE
);


