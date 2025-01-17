
CREATE TABLE Role (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL
);


CREATE TABLE Utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    motDePasse VARCHAR(255) NOT NULL,
    role_id INT,
    etat VARCHAR(50),
    FOREIGN KEY (role_id) REFERENCES Role(id)
);


CREATE TABLE Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL
);


CREATE TABLE Cours (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    contenu TEXT,
    categorie_id INT,
    FOREIGN KEY (categorie_id) REFERENCES Categorie(id)
);


CREATE TABLE Tag (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL
);


CREATE TABLE CoursTag (
    idCours INT,
    idTag INT,
    PRIMARY KEY (idCours, idTag),
    FOREIGN KEY (idCours) REFERENCES Cours(id),
    FOREIGN KEY (idTag) REFERENCES Tag(id)
);


CREATE TABLE Inscription (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idEtudiant INT,
    idCours INT,
    dateInscription DATE,
    FOREIGN KEY (idEtudiant) REFERENCES Utilisateur(id),
    FOREIGN KEY (idCours) REFERENCES Cours(id)
);

