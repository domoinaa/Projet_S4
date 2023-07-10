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
    Prix int
);

insert into Regime values (null, 'lasagnes riche en viande et en fromage', 40000);
insert into Regime values (null, 'poulet cordon bleu', 60000);
insert into Regime values (null, 'smoothie riche en calorie', 45000);

insert into Regime values (null, 'salade de poulet grillé', 50000);
insert into Regime values (null, 'nouilles de courgettes avec sauce tomate', 40000);

create table Objectif(
    idObjectif int primary key auto_increment,
    Nom varchar(100),
    descri text
);
insert into Objectif values (null, ' Augmenter son poids', "Epanouissez-vous en prenant soin de votre corps: Explorez les avantages d'un poids équilibré !");
insert into Objectif values (null, '  Réduire son poids', "Découvrez les bienfaits d'une vie légère et saine: Adoptez une approche équilibrée pour réduire votre poids !");

create table PorteMonnaie(
    idPorteMonnaie int primary key auto_increment,
    idUser int,
    montant int,
    foreign key (idUser) references User(idUser)
);

create table RegimeObjectif(
    idRegimeObjectif int primary key auto_increment,
    idRegime int,
    idObjectif int,
    genre varchar(100),
    foreign key (idRegime) references Regime(idRegime),
    foreign key (idObjectif) references Regime(idObjectif)
);

insert into RegimeObjectif values (null, 1, 1, 'femme');
insert into RegimeObjectif values (null, 2, 1, 'homme');
insert into RegimeObjectif values (null, 3, 1, 'femme');
insert into RegimeObjectif values (null, 4, 2, 'homme');
insert into RegimeObjectif values (null, 5, 2, 'homme');

create table Sport(
    idSport int primary key auto_increment,
    Nom varchar(100)
);

insert into Sport values (null, 'vélo');
insert into Sport values (null, 'natation');
insert into Sport values (null, 'danse cardio');
insert into Sport values (null, 'Sport de combat');
insert into Sport values (null, 'musculation');

create table SportObjectif(
    idSportObjectif int primary key auto_increment,
    idRegime int,
    idObjectif int,
    genre varchar(100),
    foreign key (idRegime) references Regime(idRegime),
    foreign key (idObjectif) references Regime(idObjectif)
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

insert into PorteMonnaie values (null, );

create table Code(
    idCode int primary key auto_increment,
    valeur int
);

insert into Code values (null, );

create table SuiviRegime(
    idSuiviRegime int primary key auto_increment,
    idUser int,
    duree int,
    foreign key (idUser) references User(idUser)
);

create or repolace view RegimeParRapportObjectif as 
select
RO.idRegimeObjectif,
r.idRegime,
r.Nom,
r.prix,
RO.genre
from RegimeObjectif as RO
JOIN Regime as r 
on RO.idRegime = r.idRegime;

create view SportParRapportObjectif as 
select
RO.idSportObjectif,
s.idSport,
s.Nom,
RO.genre
from SportObjectif as RO
JOIN Sport as s 
on RO.idSport = s.idSport;
