-- Pour l'instruction insert:

-- Ajouter trois employés dans la base de données avec les données de votre choix.

INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `titre`, `nodep`, `salaire`)
VALUES 
(26, "machin", "chouette", "2023-08-30 00:00:00", "secrétaire", 45, 5000), 
(27, "sing", "lulu", "2023-08-30 00:00:00", "secrétaire", 31, 5000), 
(28, "blanche", "neige", "2023-08-30 00:00:00", "secrétaire", 33, 5000)

-- Ajouter un département

INSERT INTO `dept` (`nodept`, `nom`, `noregion`)
VALUES (11, "finance", 2)

-- Pour l'instruction update:

-- Augmenter de 10% le salaire de l'employe 17

UPDATE `employe`
SET `salaire` = `salaire` * 1.1
WHERE `noemp` = 17

-- Changer le nom du département 45 en 'Logistique'

UPDATE `dept`
SET `nom` = "logistique"
WHERE `nodept` = 45

-- Pour l'instruction delete:

-- Supprimer le dernier des employés que vous avez insérés précédemment.

DELETE
FROM `employe`
WHERE `noemp` = 28


