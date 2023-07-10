CREATE DATABASE Regime;
use Regime;

create table User(
    idUser int primary key auto_increment,
    Nom varchar(100),
    Age int,
    Poids int,
    sexe varchar(100),
    taille int,
    mdp varchar(100)
);

insert into User values (null, 'Ashley', 18, 80, 'Femme', 120, 'Ashley');
insert into User values (null, 'Tiana', 20, 50, 'Homme', 160, 'Tiana');
insert into User values (null, 'Brenda', 30, 120, 'Femme', 180, 'Brenda');
insert into User values (null, 'Kylie', 35, 60, 'Femme', 140, 'Kylie');
insert into User values (null, 'Stephan', 60, 67, 'Homme', 190, 'Stephan');

create table Regime(
    idRegime int primary key auto_increment,
    Nom varchar(100),
    Prix int,
    valeur int
);

insert into Regime values (null, 'lasagnes riche en viande et en fromage', 40000, 10);
insert into Regime values (null, 'poulet cordon bleu', 60000, 5);
insert into Regime values (null, 'smoothie riche en calorie', 45000, 5);
insert into Regime values (null, 'salade de poulet grillé', 50000, 7);
insert into Regime values (null, 'nouilles de courgettes avec sauce tomate', 40000, 10);

create table Objectif(
    idObjectif int primary key auto_increment,
    Nom varchar(100),
    descri text
);
insert into Objectif values (null, ' Augmenter son poids', "Epanouissez-vous en prenant soin de votre corps: Explorez les avantages d'un poids équilibré !");
insert into Objectif values (null, ' Réduire son poids', "Découvrez les bienfaits d'une vie légère et saine: Adoptez une approche équilibrée pour réduire votre poids !");

create table RegimeObjectif(
    idRegimeObjectif int primary key auto_increment,
    idRegime int,
    idObjectif int,
    genre varchar(100),
    foreign key (idRegime) references Regime(idRegime),
    foreign key (idObjectif) references Objectif(idObjectif)
);

insert into RegimeObjectif values (null, 1, 1, 'femme');
insert into RegimeObjectif values (null, 2, 1, 'homme');
insert into RegimeObjectif values (null, 3, 1, 'femme');
insert into RegimeObjectif values (null, 4, 2, 'homme');
insert into RegimeObjectif values (null, 5, 2, 'homme');

create table Sport(
    idSport int primary key auto_increment,
    Nom varchar(100),
    valeur int
);

insert into Sport values (null, 'vélo',10);
insert into Sport values (null, 'natation',7);
insert into Sport values (null, 'danse cardio',5);
insert into Sport values (null, 'Sport de combat',15);
insert into Sport values (null, 'musculation',7);

create table SportObjectif(
    idSportObjectif int primary key auto_increment,
    idSport int,
    idObjectif int,
    genre varchar(100),
    foreign key (idSport) references Sport(idSport),
    foreign key (idObjectif) references Objectif(idObjectif)
);

insert into SportObjectif values (null, 1, 2, 'femme');
insert into SportObjectif values (null, 2, 2, 'homme');
insert into SportObjectif values (null, 3, 2, 'femme');
insert into SportObjectif values (null, 4, 1, 'homme');
insert into SportObjectif values (null, 5, 1, 'homme');

create table PorteMonnaie(
    idPorteMonnaie int primary key auto_increment,
    idUser int,
    montant int,
    foreign key (idUser) references User(idUser)
);

insert into PorteMonnaie values (null,1,50000);
insert into PorteMonnaie values (null,2,20000);
insert into PorteMonnaie values (null,3,25000);
insert into PorteMonnaie values (null,4,15000);
insert into PorteMonnaie values (null,5,30000);

create table Code(
    idCode int primary key auto_increment,
    valeur int
);

insert into Code values (null,10000);
insert into Code values (null,20000);
insert into Code values (null,30000);
insert into Code values (null,15000);
insert into Code values (null,10000);
insert into Code values (null,20000);
insert into Code values (null,30000);
insert into Code values (null,40000);
insert into Code values (null,50000);
insert into Code values (null,55000);
insert into Code values (null,35000);
insert into Code values (null,22000);
insert into Code values (null,10000);
insert into Code values (null,40000);
insert into Code values (null,30000);
insert into Code values (null,25000);

-- create table SuiviRegime(
--     idSuiviRegime int primary key auto_increment,
--     idUser int,
--     duree int,
--     foreign key (idUser) references User(idUser)
-- );

create or replace view RegimeParRapportObjectif as 
select
RO.idRegimeObjectif,
r.idRegime,
r.Nom,
r.prix,
r.valeur,
RO.genre
from RegimeObjectif as RO
JOIN Regime as r 
on RO.idRegime = r.idRegime;

create or replace view SportParRapportObjectif as 
select
SO.idSportObjectif,
s.idSport,
s.Nom,
s.valeur,
SO.genre
from SportObjectif as SO
JOIN Sport as s 
on SO.idSport = s.idSport;

create table validation_monnaie(
    idValidation int primary key auto_increment,
    daty date,
    idPorteMonnaie int,
    montant int,
    etat int default 0,
    foreign key (idPorteMonnaie) references PorteMonnaie(idPorteMonnaie)
);