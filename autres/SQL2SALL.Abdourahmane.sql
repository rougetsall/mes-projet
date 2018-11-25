---TP2
--1
SELECT SUM(places) nb_plases,etage_salle FROM salles GROUP BY etage_salle;
--2
SELECT UCASE(titre) FROM films INNER JOIN genres ON films.id_genre=genres.id_genre	 WHERE nom="horror" ORDER by id_film ASC;
--3
SELECT titre, nom genre FROM films INNER JOIN genres ON films.id_genre=genres.id_genre  ORDER by id_film ASC  LIMIT 10;
--4
SELECT films.titre ,genres.nom genre,distributeurs.nom distributeur 
FROM films  INNER JOIN genres ON films.id_genre=genres.id_genre LEFT JOIN  distributeurs ON 
films.id_distributeur=distributeurs.id_distributeur 
WHERE id_film >=3540 AND id_film<=3555 ORDER BY films.id_film ASC;
--5
SELECT personnes.nom ,personnes.prenom ,personnes.email FROM employes INNER JOIN personnes 
ON employes.id_personne=personnes.id_personne 
INNER JOIN fonctions ON employes.id_fonction=fonctions.id_fonction WHERE fonctions.nom="gérant";
--6
UPDATE personnes SET cpostal ="22, rue du labrador" WHERE id_personne=18;
--7
INSERT INTO forfaits( `nom`, `resum`, `prix`, `duree_jours`) VALUES ("supinternet","For Sup'Internet students' valable pendant

","78"," 1");
--8
UPDATE personnes SET date_naissance="1er décembre 1987" 
WHERE nom="MERLE" AND prenom="loic";
--9

DELETE e FROM employes e
INNER JOIN fonctions f ON e.id_fonction=f.id_fonction 
WHERE f.nom="agent sécurité";
--10
INSERT INTO seances(
    id_film,
    id_salle,
    id_personne_ouvreur,
    id_personne_technicien,
    id_personne_menage ,
     debut_seance ,
     fin_seance 
)
 SELECT
    films.id_film,
    salles.id_salle,
    p.id_personne ouvr,
    p1.id_personne technicien,
    p2.id_personne agent,
    "2014-12-05 20:00:00",DATE_ADD('2014-12-05 20:00:00',   INTERVAL films.duree_minutes+65 DAY_MINUTE)

FROM
    films,
    salles,
    employes
INNER JOIN personnes p ON
    employes.id_personne = p.id_personne
INNER JOIN fonctions f ON
    employes.id_fonction = f.id_fonction,
    employes e
INNER JOIN personnes p1 ON
    e.id_personne = p1.id_personne
INNER JOIN fonctions f1 ON
    e.id_fonction = f1.id_fonction,
     employes e1
INNER JOIN personnes p2 ON
    e1.id_personne = p2.id_personne
INNER JOIN fonctions f2 ON
    e1.id_fonction = f2.id_fonction
WHERE
    f.nom = "hotesse" AND nom_salle LIKE "%Scorsese" AND titre = 'Pathfinder' AND f1.nom = "projectionniste" 
    AND f2.nom="agent entretien"
LIMIT 1;
 --11
SELECT
    films.titre,
    films.resum,
    films.annee_production,
    salles.nom_salle,
    salles.places,
    CONCAT(p.nom, CONCAT("  ", p.prenom)) ouvreur,
    CONCAT(p1.nom, CONCAT("  ", p1.prenom)) technicien,
    CONCAT(p2.nom, CONCAT("  ", p2.prenom)) ménage,
    seances.debut_seance
FROM
    films
INNER JOIN seances ON films.id_film = seances.id_film
INNER JOIN salles ON salles.id_salle = seances.id_salle
INNER JOIN personnes p ON
    p.id_personne = seances.id_personne_ouvreur
INNER JOIN personnes p1 ON
    p1.id_personne = seances.id_personne_technicien
INNER JOIN personnes p2 ON
    p2.id_personne = seances.id_personne_menage;
