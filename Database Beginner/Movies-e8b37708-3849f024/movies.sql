CREATE DATABASE movies;

USE movies;

CREATE TABLE `films` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    duur VARCHAR(100) NOT NULL,
    datum VARCHAR(100) NOT NULL,
    land VARCHAR(100) NOT NULL,
    OMSCHRIJVING TEXT NOT NULL,
    trailer text NOT NULL
);

INSERT INTO `films`
(`title`, `duur`, `DATUM`, `LAND`, `OMSCHRIJVING`, `trailer`) 
VALUES 
('Avengers Endgame','3 uur 20 min','24-04-2019','USA','Avengers: Endgame is een Amerikaanse superheldenfilm uit 2019 van Marvel Studios, geregisseerd door Anthony en Joe Russo. De film is zowel chronologisch als verhaaltechnisch het vervolg op Avengers: Infinity War en de climax van de eerste 22 films in de Marvel Cinematic Universe.', 'ttps://www.youtube.com/watch?v=rrGMENN1iaY'),
('kingsman','2 uur 10 min','12-02-2015','	USA','Harry Hart, een doorgewinterde agent van een geheime organisatie, neemt hem onder zijn vleugels om een oude schuld te vereffenen. Hij draagt Gary voor om deel te nemen aan een trainingsprogramma voor geheim agent, precies op het moment dat de wereld wordt bedreigd door een IT-genie met kwaadaardige bedoelingen.
','https://www.youtube.com/watch?v=kl8F-8tR8to]'),
('Pirates of the Caribbean: The Curse of the Black Pearl','2 uur 23 min','14-08-2003','USA','Elizabeth, de dochter van een gouverneur wordt ontvoerd door ondode piraten. Kapitein Jack Sparrow wil wraak nemen op de leider van de piraten en besluit samen te werken met Will Turner die verliefd is op Elizabeth.','https://www.youtube.com/watch?v=naQr0uTrH_s&pp=ygUgcGlyYXRlcyBvZiB0aGUgY2FyaWJiZWFuIHRyYWlsZXI%3D'),
('The Godfather','2 uur 55 min','18-01-1973','USA','Een clan bestaande uit zes Italiaanse families heerst over de onderwereld van New York. Don Vito Corleone staat aan het hoofd van een van die families. Een zekere Sollozo wil met de medewerking van de familie Corleone en de familie Tattaglia drugs smokkelen. Vito Corleone weigert mee te werken.','https://www.youtube.com/watch?v=UaVTIH8mujA&pp=ygUKR09ER0FUSEVSIA%3D%3D'),
('The Dark Knight','2 uur 32 min','24-07-2008','USA','Batman bestrijdt de criminelen van Gotham, maar komt oog in oog te staan met een ongekende vijand. De psychotische Joker is onvoorspelbaar en is - in tegenstelling tot de gemiddelde bendes - niet geïnteresseerd in geld.','https://www.youtube.com/watch?v=EXeTwQWrcwY&pp=ygUPdGhlIGRhcmsga25pZ2h0'),('Rocky III','1 uur 39 min','28-05-1982','	USA','Rocky Balboa leidt sinds het behalen van de wereldtitel bij de zwaargewichten een teruggetrokken leven. Hij heeft niet meer de ambitie om in de ring te stappen en verdient bakken geld met reclamespots, promotiestunts en actes de présence.','https://www.youtube.com/watch?v=o7vbDPUMWDc')
