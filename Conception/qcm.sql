CREATE TABLE utilisateur(
   id INT NOT NULL AUTO_INCREMENT,
   nom VARCHAR(50) NOT NULL ,
   login VARCHAR(20) NOT NULL,
   password VARCHAR(50)  NOT NULL,
   statut VARCHAR(50)  NOT NULL,
   email VARCHAR(50)  NOT NULL,
   PRIMARY KEY(id),
   UNIQUE(login),
   UNIQUE(email)
)ENGINE=InnoDB;

CREATE TABLE qcm(
   id INT NOT NULL AUTO_INCREMENT,
   titre VARCHAR(50)  NOT NULL,
   dateCreation DATE  NOT NULL,
   dateExpiration Date,
   theme VARCHAR(50) NOT NULL,
   idUser INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(id)
)ENGINE=InnoDB;

CREATE TABLE question(
   id INT NOT NULL AUTO_INCREMENT,
   libelle VARCHAR(50)  NOT NULL,
   auteur VARCHAR(50)  NOT NULL,
   point INT (11),
   idUser INT NOT NULL,
   idQcm INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(idQcm) REFERENCES Qcm(id),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(id)
)ENGINE=InnoDB;

CREATE TABLE reponse(
   id INT NOT NULL AUTO_INCREMENT,
   indicateur VARCHAR(50)  NOT NULL,
   reponse VARCHAR(50) ,
   idQuestion INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(idQuestion) REFERENCES Question(id)
)ENGINE=InnoDB;

CREATE TABLE passerQcm(
   idUser INT NOT NULL ,
   idQcm INT NOT NULL,
   note VARCHAR(50),
   PRIMARY KEY(idUser, idQcm),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(id),
   FOREIGN KEY(idQcm) REFERENCES Qcm(id)
)ENGINE=InnoDB;
