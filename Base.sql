CREATE TABLE sexe (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  sexe varchar(50) NOT NULL
);

CREATE TABLE utilisateur (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  email varchar(200) NOT NULL,
  mdp varchar(100) NOT NULL, 
  nom varchar(200) DEFAULT NULL,
  idsexe int DEFAULT 3,
  datedenaissance date default NULL,
  googleid varchar(30) default NULL
);
insert into sexe values(default,'Feminin');
insert into sexe values(default,'Masculin');
insert into sexe values(default,'Inconnu');
insert into utilisateur values(default,'miora.ratsiresy@gmail.com',sha1('miora'),'Ratsiresy Miora Fanantenana',default,default,default);

ALTER TABLE utilisateur ADD FOREIGN KEY(idsexe) REFERENCES  sexe(id);

CREATE TABLE admin (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  email varchar(200) NOT NULL,
  mdp varchar(100) NOT NULL
);
insert into admin values (default,'miora.ratsiresy@gmail.com',sha1('miora'));

CREATE TABLE typereve (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  type varchar(50) NOT NULL
);

CREATE TABLE endroit (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  endroit varchar(50) NOT NULL
);

CREATE TABLE imageendroit (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  idendroit int,
  image varchar(255),
  description varchar(255)
);
ALTER TABLE imageendroit ADD FOREIGN KEY(idendroit) REFERENCES endroit(id);

CREATE TABLE appreciation (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  etoile int,
  commentaire varchar(255) 
);

CREATE TABLE sentiment (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  sentiment varchar(50) NOT NULL,
  emoji varchar(255)
);

CREATE TABLE reve (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  idutilisateur int,
  date date,
  idtype int
);
ALTER TABLE reve ADD FOREIGN KEY(idutilisateur) REFERENCES utilisateur(id);
ALTER TABLE reve ADD FOREIGN KEY(idtype) REFERENCES typereve(id);

CREATE TABLE revedescription (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  idreve int,
  idendroit int,
  actions varchar(255),
  objetimportant varchar(255),
  mode int
);
ALTER TABLE revedescription ADD FOREIGN KEY(idreve) REFERENCES reve(id);
ALTER TABLE revedescription ADD FOREIGN KEY(idendroit) REFERENCES endroit(id);

CREATE TABLE reveemotion (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  idrevedescription int,
  idsentiment int
);
ALTER TABLE reveemotion ADD FOREIGN KEY(idrevedescription) REFERENCES revedescription(id);
ALTER TABLE reveemotion ADD FOREIGN KEY(idsentiment) REFERENCES sentiment(id);

CREATE TABLE revepersonne (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  idrevedescription int,
  idsexe int,
  nombre int
);
ALTER TABLE revepersonne ADD FOREIGN KEY(idrevedescription) REFERENCES revedescription(id);
ALTER TABLE revepersonne ADD FOREIGN KEY(idsexe) REFERENCES sexe(id);

CREATE TABLE destin (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  photoillustration varchar(255),
  destin varchar(255)
);

CREATE TABLE prediction (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  photo varchar(255),
  prediction varchar(255),
  idtypereve int
);
ALTER TABLE prediction ADD FOREIGN KEY(idtypereve) REFERENCES typereve(id);

