-- Exercice d'application n°1

-- 1

SELECT
`titre`
FROM `representation`

-- 2

SELECT
`titre`
FROM `representation`
WHERE `lieu` = "Bastille"

-- Exercice d'application n°2

-- Quel est le nombre total d'étudiants ?

SELECT
COUNT(`nom`)
FROM `etudiant`

-- Quelles sont, parmi l'ensemble des notes, la note la plus haute et la note la plus basse ?

SELECT
MAX(`note`),
MIN(`note`)
FROM `evaluer`

-- Quelles sont les moyennes de chaque étudiant dans chacune des matières ?

SELECT
etudiant.nom,
matiere.libelle,
evaluer.note
FROM `evaluer`
INNER JOIN `matiere` ON evaluer.id_matiere = matiere.id
INNER JOIN `etudiant` ON evaluer.id_etudiant = etudiant.id
GROUP BY etudiant.nom

--PAUSE







-- Exercice d'application n°3

-- Quelle est la composition de l'équipe Festina (Numéro, nom et pays des coureurs) ?

SELECT
coureur.id,
coureur.nomcoureur,
pays.nompays
FROM `equipe`
INNER JOIN `coureur` ON equipe.id = coureur.id_equipe
INNER JOIN `pays` ON coureur.id_pays = pays.id
WHERE nomequipe = "festina"

-- Quel est le nombre de kilomètres total du Tour de France 97 ?





