DROP TABLE if exists UTILISATEUR cascade;
DROP TABLE if exists NEWS cascade;
DROP TABLE if exists CLUB cascade;
DROP TABLE if exists S_ABONNER cascade;
DROP TABLE if exists commentary cascade;

-- -----------------------------------------------------------------------------
--       TABLE : UTILISATEUR
-- -----------------------------------------------------------------------------

CREATE TABLE UTILISATEUR
   (
    ID_UTI serial NOT NULL  ,
    ID_CLUB int NOT NULL  ,
    NOM_UTI varchar(30) NOT NULL  ,
    PRENOM_UTI varchar(30) NOT NULL  ,
    SEXE_UTI varchar(15) NOT NULL  ,
    PASSWORD_UTI varchar(64) NOT NULL  ,
    DATE_INSCRIPTION date NULL  ,
    IMAGE_UTI text NULL  ,
	MAIL_UTI text NULL,
	CONSTRAINT PK_UTILISATEUR PRIMARY KEY (ID_UTI)
   ) ;

-- -----------------------------------------------------------------------------
--       INDEX DE LA TABLE UTILISATEUR
-- -----------------------------------------------------------------------------

CREATE  INDEX I_FK_UTILISATEUR_CLUB
     ON UTILISATEUR (ID_CLUB)
    ;

-- -----------------------------------------------------------------------------
--       TABLE : NEWS
-- -----------------------------------------------------------------------------

CREATE TABLE NEWS
   (
    ID_NEWS serial NOT NULL  ,
    ID_CLUB int NOT NULL  ,
    ARTICLE_NEWS varchar NULL ,   
	CONSTRAINT PK_NEWS PRIMARY KEY (ID_NEWS)
   ) ;

-- -----------------------------------------------------------------------------
--       TABLE : commentary
-- -----------------------------------------------------------------------------

CREATE TABLE commentary(
	ID_com serial not null,
	desc_com varchar(255),
     ID_NEWS int not null,
     ID_uti int not null,
	constraint pk_id_com primary key (id_com),
     constraint fk_news_comment foreign key (ID_NEWS) references NEWS(ID_NEWS),
     constraint FK_UTILISATEUR_comment foreign key(ID_UTI) references UTILISATEUR(ID_UTI)
);
-- -----------------------------------------------------------------------------
--       INDEX DE LA TABLE NEWS
-- -----------------------------------------------------------------------------

CREATE  INDEX I_FK_NEWS_CLUB
     ON NEWS (ID_CLUB)
    ;

-- -----------------------------------------------------------------------------
--       TABLE : CLUB
-- -----------------------------------------------------------------------------

CREATE TABLE CLUB
   (
    ID_CLUB serial NOT NULL  ,
    NOM_CLUB varchar(128) NOT NULL  ,
    LIGUE_CLUB char(2) NOT NULL  
,   CONSTRAINT PK_CLUB PRIMARY KEY (ID_CLUB)
   ) ;

-- -----------------------------------------------------------------------------
--       TABLE : S_ABONNER
-- -----------------------------------------------------------------------------

CREATE TABLE S_ABONNER
   (
    ID_UTI int NOT NULL  ,
    ID_CLUB int NOT NULL ,   
CONSTRAINT PK_S_ABONNER PRIMARY KEY (ID_UTI, ID_CLUB)
   ) ;

-- -----------------------------------------------------------------------------
--       INDEX DE LA TABLE S_ABONNER
-- -----------------------------------------------------------------------------

CREATE  INDEX I_FK_S_ABONNER_UTILISATEUR
     ON S_ABONNER (ID_UTI)
    ;

CREATE  INDEX I_FK_S_ABONNER_CLUB
     ON S_ABONNER (ID_CLUB)
    ;


-- -----------------------------------------------------------------------------
--       CREATION DES REFERENCES DE TABLE
-- -----------------------------------------------------------------------------


ALTER TABLE UTILISATEUR ADD 
     CONSTRAINT FK_UTILISATEUR_CLUB
          FOREIGN KEY (ID_CLUB)
               REFERENCES CLUB (ID_CLUB);

ALTER TABLE NEWS ADD 
     CONSTRAINT FK_NEWS_CLUB
          FOREIGN KEY (ID_CLUB)
               REFERENCES CLUB (ID_CLUB);

ALTER TABLE S_ABONNER ADD 
     CONSTRAINT FK_S_ABONNER_UTILISATEUR
          FOREIGN KEY (ID_UTI)
               REFERENCES UTILISATEUR (ID_UTI);

ALTER TABLE S_ABONNER ADD 
     CONSTRAINT FK_S_ABONNER_CLUB
          FOREIGN KEY (ID_CLUB)
               REFERENCES CLUB (ID_CLUB);



-- -----------------------------------------------------------------------------
--                INSERTION DE DONNÉES
-- -----------------------------------------------------------------------------

--INSERT des CLUBS

insert into club values
(default,'Paris-SG'  ,'L1'),
(default,'Lens' 	, 'L1'),
(default,'Lorient' 	 ,'L1'),
(default,'Rennes' 	, 'L1'),
(default,'Marseille' ,'L1'),
(default,'Lille' 	, 'L1'),
(default,'Monaco'	, 'L1'),
(default,'Lyon' 	, 'L1'),
(default,'Clermont' , 'L1'),
(default,'Toulouse' , 'L1'),
(default,'Troyes'	, 'L1'),
(default,'Nice' 	, 'L1'),
(default,'Montpellier','L1'),
(default,'Reims' 	, 'L1'),
(default,'Nantes'	, 'L1'),
(default,'Strasbourg','L1'),
(default,'Brest' 	, 'L1'),
(default,'Auxerre'	 ,'L1'),
(default,'AC Ajaccio','L1'),
(default,'Angers'    ,'L1');

--INSERT DES ARTICLES

INSERT INTO NEWS (ID_CLUB, ARTICLE_NEWS)
VALUES
    (1, 'Premier article sur le club A'),
    (2, 'Nouvelles passionnantes du club B'),
    (3, 'Actualités du club C à ne pas manquer'),
    (1, 'Annonce importante du club A'),
    (2, 'Derniers événements passionnants du club B');

INSERT INTO UTILISATEUR (ID_CLUB, NOM_UTI, PRENOM_UTI, SEXE_UTI, PASSWORD_UTI, DATE_INSCRIPTION, IMAGE_UTI, MAIL_UTI)
VALUES
    (13, 'Berne', 'Paul', 'homme', '8582c68ed08f03f0fecd4dacab28e5d5', '2023-11-21', 'img/defaut_pfp.jpg', 'paulberne1309@gmail.com');

INSERT INTO commentary (DESC_COM, ID_NEWS, ID_UTI)
VALUES
    ('Excellent article!', 1, 1),
    ('Jaime beaucoup cette nouvelle.', 1, 1),
    ('Félicitations au club A!', 1, 1),
    
    ('Intéressant, merci pour le partage.', 2, 1),
    ('Le club B fait un excellent travail!', 2, 1),
    ('Hâte den savoir plus sur ces nouvelles!', 2, 1),
    
    ('Les actualités du club C sont toujours fascinantes.', 3, 1),
    ('Merci pour les mises à jour fréquentes.', 3, 1),
    ('Je suis impatient de participer à ces événements!', 3, 1);


-- -----------------------------------------------------------------------------
--                FIN DE GENERATION
-- -----------------------------------------------------------------------------