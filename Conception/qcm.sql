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
   date_creation DATE NOT NULL,
   date_expiration Date,
   theme VARCHAR(50) NOT NULL,
   id_user INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_user) REFERENCES Utilisateur(id)
)ENGINE=InnoDB;

CREATE TABLE question(
   id INT NOT NULL AUTO_INCREMENT,
   libelle VARCHAR(50)  NOT NULL,
   auteur VARCHAR(50)  NOT NULL,
   point INT (11),
   id_user INT NOT NULL,
   id_qcm INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_qcm) REFERENCES Qcm(id),
   FOREIGN KEY(id_user) REFERENCES Utilisateur(id)
)ENGINE=InnoDB;

CREATE TABLE reponse(
   id INT NOT NULL AUTO_INCREMENT,
   indicateur VARCHAR(50)  NOT NULL,
   reponse VARCHAR(50) ,
   id_q INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_q) REFERENCES Question(id)
)ENGINE=InnoDB;

CREATE TABLE passer_qcm(
   id_user INT NOT NULL ,
   id_qcm INT NOT NULL,
   note VARCHAR(50),
   PRIMARY KEY(id_user, id_qcm),
   FOREIGN KEY(id_user) REFERENCES Utilisateur(id),
   FOREIGN KEY(id_qcm) REFERENCES Qcm(id)
)ENGINE=InnoDB;
