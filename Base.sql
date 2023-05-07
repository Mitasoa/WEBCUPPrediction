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
  googleid varchar(30) default NULL
);

ALTER TABLE
  utilisateur
ADD
  FOREIGN KEY(idsexe) REFERENCES sexe(id);

CREATE TABLE admin (
  id INT PRIMARY KEY AUTO_INCREMENT,
  email varchar(200) NOT NULL,
  mdp varchar(100) NOT NULL
);

insert into
  admin
values
  (
    default,
    'miora.ratsiresy@gmail.com',
    sha1('miora')
  );

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

ALTER TABLE
  imageendroit
ADD
  FOREIGN KEY(idendroit) REFERENCES endroit(id);

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

ALTER TABLE
  reve
ADD
  FOREIGN KEY(idutilisateur) REFERENCES utilisateur(id);

ALTER TABLE
  reve
ADD
  FOREIGN KEY(idtype) REFERENCES typereve(id);

CREATE TABLE revedescription (
  id INT PRIMARY KEY AUTO_INCREMENT,
  idreve int,
  idendroit int,
  actions varchar(255),
  objetimportant varchar(255),
  mode int
);

ALTER TABLE
  revedescription
ADD
  FOREIGN KEY(idreve) REFERENCES reve(id);

ALTER TABLE
  revedescription
ADD
  FOREIGN KEY(idendroit) REFERENCES endroit(id);

CREATE TABLE reveemotion (
  id INT PRIMARY KEY AUTO_INCREMENT,
  idrevedescription int,
  idsentiment int
);

ALTER TABLE
  reveemotion
ADD
  FOREIGN KEY(idrevedescription) REFERENCES revedescription(id);

ALTER TABLE
  reveemotion
ADD
  FOREIGN KEY(idsentiment) REFERENCES sentiment(id);

CREATE TABLE revepersonne (
  id INT PRIMARY KEY AUTO_INCREMENT,
  idrevedescription int,
  idsexe int,
  nombre int
);

ALTER TABLE
  revepersonne
ADD
  FOREIGN KEY(idrevedescription) REFERENCES revedescription(id);

ALTER TABLE
  revepersonne
ADD
  FOREIGN KEY(idsexe) REFERENCES sexe(id);

CREATE TABLE destin (
  id INT PRIMARY KEY AUTO_INCREMENT,
  photoillustration varchar(255),
  destin varchar(255)
);

insert into
  destin
values
  (default, 'ffff0', 'ddgggr');

insert into
  destin
values
  (default, 'kaka', 'ffff');

CREATE TABLE prediction (
  id INT PRIMARY KEY AUTO_INCREMENT,
  photo varchar(255),
  prediction varchar(255),
  idtypereve int
);

ALTER TABLE
  prediction
ADD
  FOREIGN KEY(idtypereve) REFERENCES typereve(id);

CREATE TABLE evaluationprediction (
  id INT PRIMARY KEY AUTO_INCREMENT,
  idreve int,
  etoile int,
  commentaire text
);

ALTER TABLE
  evaluationprediction
ADD
  FOREIGN KEY(idreve) REFERENCES reve(id);

--
create view listereve as
select
  reve.*,
  typereve.type
from
  reve
  join typereve on typereve.id = reve.idtype;

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
  SUM(
    CASE
      WHEN rp.idsexe = 1 THEN rp.nombre
      ELSE 0
    END
  ) AS nb_hommes,
  SUM(
    CASE
      WHEN rp.idsexe = 2 THEN rp.nombre
      ELSE 0
    END
  ) AS nb_femmes
FROM
  revedescription rd
  LEFT JOIN reveemotion re ON rd.id = re.idrevedescription
  LEFT JOIN sentiment se ON re.idsentiment = se.id
  LEFT JOIN revepersonne rp ON rd.id = rp.idrevedescription
  join endroit on endroit.id = rd.idendroit
GROUP BY
  rd.id;

--
ALTER TABLE
  revedescription
ADD
  COLUMN ordre int;

ALTER TABLE
  typereve
ADD
  COLUMN image varchar(200) default NULL;

insert into
  sentiment(sentiment, emoji)
values
  ('Heureux', 'heureux.png');

insert into
  sentiment(sentiment, emoji)
values
  ('Triste', 'triste.png');

insert into
  sentiment(sentiment, emoji)
values
  ('En Colere', 'colore.jpg');

insert into
  sentiment(sentiment, emoji)
values
  ('Enerve', 'enerve.png');

insert into
  sentiment(sentiment, emoji)
values
  ('Peur', 'peur.png');

insert into
  sentiment(sentiment, emoji)
values
  ('Etonne', 'etonne.jpg');

insert into
  sentiment(sentiment, emoji)
values
  ('Amoureux', 'amoureux.png');

insert into
  sentiment(sentiment, emoji)
values
  ('Aucun', 'aucun.png');

insert into
  typereve(type)
values
  ('cauchemar');

insert into
  typereve(type)
values
  ('creatif');

insert into
  typereve(type)
values
  ('creatif');

insert into
  endroit(endroit)
values
  ('parking');

insert into
  endroit(endroit)
values
  ('foret');

insert into
  endroit(endroit)
values
  ('hotel');

insert into
  endroit(endroit)
values
  ('Cimetiere');

insert into
  endroit(endroit)
values
  ('Eglise');

insert into
  endroit(endroit)
values
  ('Maison');

insert into
  endroit(endroit)
values
  ('Ecole');

insert into
  endroit(endroit)
values
  ('Plage');

insert into
  imageendroit(idendroit, image, description)
values
  (1, 'parking1.jpg', 'Parking public');

insert into
  imageendroit(idendroit, image, description)
values
  (1, 'parking2.png', 'Parking sous-sol');

insert into
  imageendroit(idendroit, image, description)
values
  (1, 'parking3.png', 'Parking grand ville');

insert into
  imageendroit(idendroit, image, description)
values
  (2, 'forest1.png', 'Foret dense');

insert into
  imageendroit(idendroit, image, description)
values
  (2, 'forest2.png', 'Foret violet, Jour ');

insert into
  imageendroit(idendroit, image, description)
values
  (2, 'forest3.png', 'Foret la nuit seul');

insert into
  imageendroit(idendroit, image, description)
values
  (3, 'hotel1.png', 'Hotel sombre dans la nuit');

insert into
  imageendroit(idendroit, image, description)
values
  (3, 'hotel2.png', 'Hotel eclaire jour');

insert into
  imageendroit(idendroit, image, description)
values
  (
    4,
    'fasana1.png',
    'Devant le portail du cimetiere'
  );

insert into
  imageendroit(idendroit, image, description)
values
  (4, 'fasana2.png', 'Cimietiere blanc vie de loin');

insert into
  imageendroit(idendroit, image, description)
values
  (4, 'fasana3.jpg', 'Funerail avec un cercueil');

insert into
  imageendroit(idendroit, image, description)
values
  (5, 'eglise1.jpg', 'Eglise mosaique interieur');

insert into
  imageendroit(idendroit, image, description)
values
  (5, 'eglise2.png', 'Eglise classic exterieur');

insert into
  imageendroit(idendroit, image, description)
values
  (
    6,
    'maison1.png',
    'Maison classic anglophone en mode matin '
  );

insert into
  imageendroit(idendroit, image, description)
values
  (6, 'maison2.png', 'Maison hante theme sombre');

insert into
  imageendroit(idendroit, image, description)
values
  (6, 'maison3.png', 'Maison en milieu pauvre');

insert into
  imageendroit(idendroit, image, description)
values
  (7, 'ecole1.png', 'Ecole des eleves en cartable ');

insert into
  imageendroit(idendroit, image, description)
values
  (
    7,
    'ecole2.png',
    'Etablissement scolaire vue de loin'
  );

insert into
  imageendroit(idendroit, image, description)
values
  (8, 'plage1.png', 'Plage a l"extieur vue facade');
  

CREATE VIEW statistique_sexe_typereve as
SELECT
  typereve.type AS Type_De_Reve,
  sexe.sexe AS Sexe,
  CONCAT(
    ROUND(
      COUNT(reve.id) / SUM(COUNT(reve.id)) OVER (PARTITION BY typereve.id) * 100,
      2
    ),
    '%'
  ) AS Pourcentage
FROM
  typereve
  INNER JOIN reve ON typereve.id = reve.idtype
  INNER JOIN utilisateur ON reve.idutilisateur = utilisateur.id
  INNER JOIN sexe ON utilisateur.idsexe = sexe.id
GROUP BY
  typereve.id,
  sexe.id;


  CREATE VIEW statistique_evaluation_typereve as
  SELECT
    typereve.type AS Type_De_Reve,
    IFNULL(CONCAT(ROUND(SUM(CASE WHEN evaluationprediction.etoile = 5 THEN 1 ELSE 0 END) / COUNT(*) * 100, 2), '%'), '0%') AS Pourcentage_Evaluation_Maximum
  FROM
    typereve
    LEFT JOIN reve ON typereve.id = reve.idtype
    LEFT JOIN evaluationprediction ON reve.id = evaluationprediction.idreve
  GROUP BY
    typereve.id;
