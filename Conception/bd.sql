CREATE TABLE Utilisateur(
   id INT,
   nom VARCHAR(50) ,
   login VARCHAR(20) ,
   password VARCHAR(50)  NOT NULL,
   statut VARCHAR(50)  NOT NULL,
   email VARCHAR(50)  NOT NULL,
   PRIMARY KEY(id),
   UNIQUE(login),
   UNIQUE(email)
);

CREATE TABLE Qcm(
   id INT,
   titre VARCHAR(50)  NOT NULL,
   date_creation DATE NOT NULL,
   theme VARCHAR(50) ,
   id_1 INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES Utilisateur(id)
);

CREATE TABLE Question(
   id INT,
   libelle VARCHAR(50)  NOT NULL,
   auteur VARCHAR(50)  NOT NULL,
   point INT,
   id_1 INT NOT NULL,
   id_2 INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES Qcm(id),
   FOREIGN KEY(id_2) REFERENCES Utilisateur(id)
);

CREATE TABLE Reponse(
   id INT,
   indicateur VARCHAR(50)  NOT NULL,
   reponse VARCHAR(50) ,
   id_1 INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES Question(id)
);

CREATE TABLE passer_qcm(
   id INT,
   id_1 INT,
   note VARCHAR(50) ,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES Utilisateur(id),
   FOREIGN KEY(id_1) REFERENCES Qcm(id)
);
