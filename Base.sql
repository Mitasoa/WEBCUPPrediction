CREATE TABLE sexe (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  sexe varchar(50) NOT NULL
);

CREATE TABLE utilisateur (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  email varchar(200) NOT NULL,
  mdp varchar(100) default NULL, 
  nom varchar(200) DEFAULT NULL,
  idsexe int DEFAULT 3,
  datedenaissance date default NULL,
  googleid varchar(30) default NULL,
  photoprofil varchar(100) DEFAULT NULL
);
insert into sexe values(default,'Feminin');
insert into sexe values(default,'Masculin');
insert into sexe values(default,'Inconnu');
insert into utilisateur values(default,'miora.ratsiresy@gmail.com',sha1('miora'),'Ratsiresy Miora Fanantenana',default,default,default,default);

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
insert into appreciation values (default,4,'Cool');
insert into appreciation values (default,1,'Trop top');
insert into appreciation values (default,1,'Pas mal');
insert into appreciation values (default,4,'Tres top');
insert into appreciation values (default,5,'Trop top');
insert into appreciation values (default,0,'Null');

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

CREATE TABLE revedescriptionimage (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  idrevedescription int,
  idimageendroit int
);
ALTER TABLE revedescriptionimage ADD FOREIGN KEY(idrevedescription) REFERENCES revedescription(id);
ALTER TABLE revedescriptionimage ADD FOREIGN KEY(idimageendroit) REFERENCES imageendroit(id);


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
insert into destin values(default,'ffff0','ddgggr');
insert into destin values(default,'kaka','ffff');
CREATE TABLE prediction (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  photo varchar(255),
  prediction varchar(255),
  idtypereve int
);
ALTER TABLE prediction ADD FOREIGN KEY(idtypereve) REFERENCES typereve(id);

CREATE TABLE predictionreve (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  idreve int,
  idprediction int
);
ALTER TABLE predictionreve ADD FOREIGN KEY(idreve) REFERENCES reve(id);
ALTER TABLE predictionreve ADD FOREIGN KEY(idprediction) REFERENCES prediction(id);

CREATE TABLE evaluationprediction (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  idreve int,
  etoile int,
  commentaire text
);

ALTER TABLE evaluationprediction ADD FOREIGN KEY(idreve) REFERENCES reve(id);


--
create view listereve as select reve.*,typereve.type from reve join typereve on typereve.id=reve.idtype;



CREATE VIEW listerevedescription AS
SELECT 
  rd.id, 
  rd.idreve, 
  rd.idendroit,
  endroit.endroit,
  rd.actions, 
  rd.objetimportant, 
  rd.mode, 
  GROUP_CONCAT(DISTINCT se.sentiment SEPARATOR ', ') AS sentiments,
  SUM(CASE WHEN rp.idsexe = 1 THEN rp.nombre ELSE 0 END) AS nb_hommes,
  SUM(CASE WHEN rp.idsexe = 2 THEN rp.nombre ELSE 0 END) AS nb_femmes
FROM 
  revedescription rd 
  LEFT JOIN reveemotion re ON rd.id = re.idrevedescription 
  LEFT JOIN sentiment se ON re.idsentiment = se.id 
  LEFT JOIN revepersonne rp ON rd.id = rp.idrevedescription
  join endroit on endroit.id=rd.idendroit
GROUP BY 
  rd.id;
