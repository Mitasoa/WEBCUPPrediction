CREATE TABLE sexe (
  id INT PRIMARY KEY AUTO_INCREMENT,
  sexe varchar(50) NOT NULL
);
insert into sexe(sexe) values('Femme');
insert into sexe(sexe) values('Homme');
insert into sexe(sexe) values('Inconnu');

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

CREATE TABLE predictionreve (
	id INT PRIMARY KEY AUTO_INCREMENT,
	idreve int,
	idprediction int
);

ALTER TABLE
	predictionreve
ADD
	FOREIGN KEY(idreve) REFERENCES reve(id);

ALTER TABLE
	predictionreve
ADD
	FOREIGN KEY(idprediction) REFERENCES prediction(id);


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
    COALESCE(
      ROUND(
        COUNT(reve.id) / SUM(COUNT(reve.id)) OVER (PARTITION BY typereve.id, sexe.id) * 100,
        2
      ),
      0
    ),
    '%'
  ) AS Pourcentage
FROM
  typereve
  CROSS JOIN sexe
  LEFT JOIN reve ON typereve.id = reve.idtype
  LEFT JOIN utilisateur ON reve.idutilisateur = utilisateur.id
  AND utilisateur.idsexe = sexe.id
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



INSERT INTO utilisateur (email, mdp, nom, idsexe, datedenaissance, googleid)
VALUES 
('johndoe@gmail.com', SHA1('secret'), 'John Doe', 1, '1990-01-01', NULL),
('janedoe@gmail.com', SHA1('password'), 'Jane Doe', 2, '1995-06-15', NULL),
('bobsmith@gmail.com', SHA1('123456'), 'Bob Smith', 1, '1985-12-31', NULL),
('maryjones@yahoo.com', SHA1('qwerty'), 'Mary Jones', 2, '1980-05-20', NULL),
('jimmychoo@hotmail.com', SHA1('letmein'), 'Jimmy Choo', 1, '1977-02-14', NULL);


INSERT INTO admin (email, mdp)
VALUES ('lucas@gmail.com', SHA1('0000'));


INSERT INTO typereve (type)
VALUES ('Prémonitoire'), ('Lucide'), ('Érotique');

INSERT INTO imageendroit (idendroit, image, description)
VALUES (1, 'parking6.jpg', 'Vue du parking depuis la rue'),
       (1, 'parking7.jpg', 'Entrée du parking'),
       (1, 'parking8.jpg', 'Ascenseur du parking'),
       (1, 'parking9.jpg', 'Sortie du parking'),
       (1, 'parking10.jpg', 'Vue de l\'intérieur du parking');


INSERT INTO imageendroit (idendroit, image, description)
VALUES (2, 'forest4.jpg', 'Vue panoramique de la forêt'),
       (2, 'forest5.jpg', 'Pont suspendu dans la forêt'),
       (2, 'forest6.jpg', 'Chemin de randonnée dans la forêt'),
       (2, 'forest7.jpg', 'Cours d\'eau dans la forêt'),
       (2, 'forest8.jpg', 'Vue aérienne de la forêt');


INSERT INTO imageendroit (idendroit, image, description)
VALUES (3, 'hotel3.jpg', 'Hall d\'entrée de l\'hôtel'),
       (3, 'hotel4.jpg', 'Piscine de l\'hôtel'),
       (3, 'hotel5.jpg', 'Vue aérienne de l\'hôtel'),
       (3, 'hotel6.jpg', 'Restaurant de l\'hôtel'),
       (3, 'hotel7.jpg', 'Chambre de l\'hôtel');

INSERT INTO imageendroit (idendroit, image, description)
VALUES (4, 'tomb1.jpg', 'Vue d\'ensemble de la tombe'),
       (4, 'tomb2.jpg', 'Statue sur la tombe'),
       (4, 'tomb3.jpg', 'Vue de la tombe depuis le haut de la colline'),
       (4, 'tomb4.jpg', 'Sculptures sur la tombe'),
       (4, 'tomb5.jpg', 'Intérieur de la tombe');


INSERT INTO imageendroit (idendroit, image, description)
VALUES (5, 'eglise3.jpg', 'Intérieur de l\'église avec des vitraux colorés'),
       (5, 'eglise4.jpg', 'Le toit de l\'église avec des tuiles en terre cuite'),
       (5, 'eglise5.jpg', 'Le clocher de l\'église vu de loin'),
       (5, 'eglise6.jpg', 'Vue panoramique de l\'église et de son environnement'),
       (5, 'eglise7.jpg', 'L\'autel de l\'église avec ses décorations en bois sculpté');

insert into
  imageendroit(idendroit, image, description)
values
  (6, 'maison6.png', 'Maison en pierre sur une colline');

insert into
  imageendroit(idendroit, image, description)
values
  (6, 'maison7.png', 'Maison victorienne au coucher du soleil');

insert into
  imageendroit(idendroit, image, description)
values
  (6, 'maison8.png', 'Maison abandonnée en pleine nature');

insert into
  imageendroit(idendroit, image, description)
values
  (6, 'maison9.png', 'Maison colorée dans un quartier animé');

insert into
  imageendroit(idendroit, image, description)
values
  (6, 'maison10.png', 'Maison rustique dans une petite ville de campagne');


insert into
imageendroit(idendroit, image, description)
values
(
7,
'ecole3.png',
'Ecole interieure avec des salles de classe modernes'
);

insert into
imageendroit(idendroit, image, description)
values
(7, 'ecole4.png', 'Ecole en banlieue');

insert into
imageendroit(idendroit, image, description)
values
(7, 'ecole5.png', 'Ecole maternelle en zone urbaine');


insert into
  imageendroit(idendroit, image, description)
values
  (8, 'plage2.jpg', 'Plage de sable fin avec des palmiers');

insert into
  imageendroit(idendroit, image, description)
values
  (8, 'plage3.jpg', 'Plage de galets avec des falaises');

insert into
  imageendroit(idendroit, image, description)
values
  (8, 'plage4.jpg', 'Plage animée avec des parasols et des transats');

insert into
  imageendroit(idendroit, image, description)
values
  (8, 'plage5.jpg', 'Plage déserte au coucher du soleil');
  
insert into
  imageendroit(idendroit, image, description)
values
  (8, 'plage6.jpg', 'Plage avec vue sur une île au loin');

INSERT INTO prediction (photo, prediction, idtypereve) 
VALUES 
('image1.jpg', 'Vous rencontrerez bientôt quelqu\'un de spécial.', 1),
('image2.png', 'Vous aurez une promotion au travail.', 2),
('image3.jpg', 'Vous ferez un voyage à l\'étranger prochainement.', 1),
('image4.png', 'Vous devrez prendre une décision difficile dans les prochains jours.', 3),
('image5.jpg', 'Vous ferez une rencontre qui changera votre vie.', 1),
('image6.png', 'Vous ferez une découverte surprenante.', 4),
('image7.jpg', 'Vous devrez faire preuve de patience dans une situation difficile.', 3),
('image8.png', 'Vous recevrez une bonne nouvelle dans les prochains jours.', 2),
('image9.jpg', 'Vous devrez prendre un risque pour atteindre votre objectif.', 4),
('image10.png', 'Vous traverserez une période de stress, mais tout ira bien à la fin.', 3);
INSERT INTO prediction (photo, prediction, idtypereve)
VALUES ('foret1.jpg', 'Vous allez bientôt trouver un trésor caché dans la forêt.', 5),
       ('maison2.png', 'Vous allez bientôt rencontrer quelqu\'un qui changera votre vie.', 4);
INSERT INTO prediction (photo, prediction, idtypereve)
VALUES ('maison1.png', 'Vous allez bientôt déménager dans une grande maison', 5),
       ('ecole1.png', 'Vous allez réussir à obtenir votre diplôme avec mention', 5);

INSERT INTO reve (idutilisateur, date, idtype) VALUES
(1, '2022-05-01', 2),
(2, '2022-05-02', 1);
INSERT INTO reve (idutilisateur, date, idtype) VALUES (1, '2023-05-07', 2);
INSERT INTO reve (idutilisateur, date, idtype) VALUES (2, '2023-05-06', 3);
INSERT INTO reve (idutilisateur, date, idtype) VALUES (1, '2023-05-05', 1);
INSERT INTO reve (idutilisateur, date, idtype) VALUES (3, '2023-05-04', 4);
INSERT INTO reve (idutilisateur, date, idtype) VALUES (2, '2023-05-03', 2);

INSERT INTO evaluationprediction (idreve, etoile, commentaire) VALUES
(1, 4, 'Bonne prédiction, mais manque de détails.'),
(2, 5, 'Prédiction exacte, très impressionnant !');


INSERT INTO evaluationprediction (idreve, etoile, commentaire) VALUES (1, 4, 'J''ai trouvé cette prédiction intéressante !');
INSERT INTO evaluationprediction (idreve, etoile, commentaire) VALUES (2, 5, 'La prédiction s''est avérée vraie !');
INSERT INTO evaluationprediction (idreve, etoile, commentaire) VALUES (3, 3, 'Pas vraiment convaincu par cette prédiction...');
INSERT INTO evaluationprediction (idreve, etoile, commentaire) VALUES (4, 2, 'Je ne crois pas du tout à cette prédiction.');
INSERT INTO evaluationprediction (idreve, etoile, commentaire) VALUES (5, 1, 'Je n''ai pas du tout aimé cette prédiction.');

INSERT INTO destin (photoillustration, destin)
VALUES 
('image1.jpg', 'Dans 10 ans, vous serez en train de diriger votre propre entreprise prospère qui offre des services innovants et impacte positivement la société.'),
('image2.jpg', 'Dans 5 ans, vous serez un expert dans votre domaine avec une réputation bien établie, ayant travaillé sur des projets de grande envergure et ayant fait des contributions significatives.'),
('image3.jpg', 'Dans 7 ans, vous aurez réalisé votre rêve de faire un tour du monde, ayant visité de nombreux pays et expérimenté différentes cultures.'),
('image4.jpg', 'Dans 1 ans, vous serez un leader reconnu dans votre communauté, ayant créé un impact significatif sur les causes qui vous tiennent à cœur.'),
('image5.jpg', 'Dans 2 ans, vous serez en train de vivre dans la maison de vos rêves, un lieu de paix et de confort où vous pourrez vous détendre et profiter de votre vie.'),
('image6.jpg', 'Dans 30 ans, vous aurez atteint un niveau de santé et de forme physique optimal, ayant développé des habitudes de vie saines qui vous ont aidé à vivre pleinement.'),
('image7.jpg', 'Dans 20 ans, vous serez un expert dans l\'art de la méditation, ayant atteint un niveau de paix et de sérénité intérieure qui vous permet de faire face aux défis de la vie avec confiance.'),
('image8.jpg', 'Dans 3 ans, vous serez en train de travailler sur un projet qui changera la donne dans votre industrie, ayant créé une innovation qui révolutionnera la façon dont les choses sont faites.'),
('image9.jpg', 'Dans 18 ans, vous serez un auteur publié, ayant partagé votre histoire inspirante avec le monde et touché la vie de nombreuses personnes avec votre travail.'),
('image10.jpg', 'Dans 15 ans, vous serez en train de vivre une vie remplie de passion et de créativité, ayant exploré différents aspects de votre personnalité et réalisé vos rêves les plus fous.');
