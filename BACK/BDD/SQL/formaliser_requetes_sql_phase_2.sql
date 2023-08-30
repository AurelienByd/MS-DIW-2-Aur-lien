-- Rechercher le prénom des employés et le numéro de la région de leur département

SELECT
employe.prenom,
dept.noregion
FROM `employe`
INNER JOIN `dept` ON employe.nodep = dept.nodept

-- Rechercher le numéro du département, le nom du département, le nom des employés classés par numéro de département (renommer les tables utilisées)

SELECT
dept.nodept AS "numéro département",
dept.nom AS "nom département",
employe.nom AS "nom des employés"
FROM `dept`
INNER JOIN `employe` ON dept.nodept = employe.nodep
ORDER BY `nodept`

-- Rechercher le nom des employés du département Distribution

SELECT
dept.nom AS "nom département",
employe.nom AS "nom des employés"
FROM `dept`
INNER JOIN `employe` ON dept.nodept = employe.nodep
WHERE dept.nom = "distribution"

-- Rechercher le nom et le salaire des employés qui gagnent plus que leur patron, et le nom et le salaire de leur patron

SELECT
employe1.nom,
employe1.salaire,
employe2.nom,
employe2.salaire 
FROM `employe` AS `employe1`
LEFT OUTER JOIN `employe` AS `employe2` ON employe2.noemp = employe1.nosup
WHERE employe1.salaire > employe2.salaire 

-- Rechercher le nom et le titre des employés qui ont le même titre que Amartakaldire

SELECT
`nom`,
`titre`
FROM `employe`
WHERE `titre` IN (SELECT `titre` FROM `employe` WHERE `nom`="amartakaldire");

-- Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus qu'un seul employé du département 31, classés par numéro de département et salaire

SELECT
`nom`,
`salaire`,
`nodep`
FROM `employe`
WHERE `salaire` > ANY(SELECT `salaire` FROM `employe` WHERE `nodep` = 31)
ORDER BY
`nodep` ASC,
`salaire` ASC 

-- Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus que tous les employés du département 31, classés par numéro de département et salaire

SELECT
`nom`,
`salaire`,
`nodep`
FROM `employe`
WHERE `salaire` > ALL(SELECT `salaire` FROM `employe` WHERE `nodep` = 31)
ORDER BY
`nodep` ASC,
`salaire` ASC 

-- Rechercher le nom et le titre des employés du service 31 qui ont un titre que l'on trouve dans le département 32

SELECT
`nom`,
`titre`
FROM `employe`
WHERE `nodep` = 31 AND `titre` IN (SELECT `titre` FROM `employe` WHERE `nodep` = 32)

-- Rechercher le nom et le titre des employés du service 31 qui ont un titre l'on ne trouve pas dans le département 32

SELECT
`nom`,
`titre`
FROM `employe`
WHERE `nodep` = 31 AND `titre` NOT IN (SELECT `titre` FROM `employe` WHERE `nodep` = 32)

-- Rechercher le nom, le titre et le salaire des employés qui ont le même titre et le même salaire que Fairant

SELECT
`nom`,
`titre`,
`salaire`
FROM `employe`
WHERE `titre` IN (SELECT `titre` FROM `employe` WHERE `nom` = "fairent") AND `salaire` IN  (SELECT `salaire` FROM `employe` WHERE `nom` = "fairent")

-- Rechercher le numéro de département, le nom du département, le nom des employés, en affichant aussi les départements dans lesquels il n'y a personne, classés par numéro de département

SELECT
dept.nodept,
dept.nom,
employe.nom AS `employé`
FROM `dept`
LEFT JOIN `employe` ON dept.nodept = employe.nodep
ORDER BY dept.nodept

-- 1. Calculer le nombre d'employés de chaque titre

SELECT
`titre`,
COUNT(`titre`)
FROM `employe`
GROUP BY `titre`

-- 2. Calculer la moyenne des salaires et leur somme, par région

SELECT
AVG(employe.salaire),
SUM(employe.salaire)
FROM `dept`
INNER JOIN `employe` ON dept.nodept = employe.nodep
GROUP BY dept.noregion

-- 3. Afficher les numéros des départements ayant au moins 3 employés

SELECT
`nodep`,
COUNT(*)
FROM `employe`
GROUP BY `nodep`
HAVING COUNT(*) >= 3

-- 4. Afficher les lettres qui sont l'initiale d'au moins trois employés

SELECT 
SUBSTRING(`prenom`, 1, 1) AS `initiale du prénom`,
COUNT(*) AS `nombre d'employés`
FROM `employe`
GROUP BY `initiale du prénom`
HAVING COUNT(*) >= 3 

-- 5. Rechercher le salaire maximum et le salaire minimum parmi tous les salariés et l'écart entre les deux

SELECT
MAX(`salaire`) - MIN(`salaire`) AS `écart`
FROM `employe`

-- 6. Rechercher le nombre de titres différents

SELECT 
COUNT(DISTINCT `titre`)
FROM `employe`

-- 7. Pour chaque titre, compter le nombre d'employés possédant ce titre

SELECT DISTINCT
`titre`,
COUNT(`titre`)
FROM `employe`
GROUP BY `titre`

-- 8. Pour chaque nom de département, afficher le nom du département et le nombre d'employés

SELECT DISTINCT
dept.nom,
COUNT(employe.nodep)
FROM `dept`
INNER JOIN `employe` ON dept.nodept = employe.nodep
GROUP BY dept.nom

-- 9. Rechercher les titres et la moyenne des salaires par titre dont la moyenne est supérieure à la moyenne des salaires des Représentants

SELECT
`titre`,
AVG(`salaire`) AS `moyenne des salaires`
FROM `employe`
GROUP BY `titre`
HAVING AVG(`salaire`) > (SELECT AVG(`salaire`) FROM `employe` WHERE `titre` = "représentant")

-- 10.Rechercher le nombre de salaires renseignés et le nombre de taux de commission renseignés

SELECT
COUNT(`salaire`) AS `salaires renseignés`,
COUNT(`tauxcom`) AS `taux de commision renseignés`
FROM `employe`
WHERE `salaire` IS NOT NULL
