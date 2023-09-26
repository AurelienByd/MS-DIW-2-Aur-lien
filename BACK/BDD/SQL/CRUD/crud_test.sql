-- Active: 1693467650807@@127.0.0.1@3306@record

-- Afficher le nombre de disques présents :

SELECT COUNT(disc_id) AS nombre FROM disc

-- Liste des disques :

SELECT 
disc.disc_picture,
disc.disc_title,
artist.artist_name,
disc.disc_label,
disc.disc_year,
disc.disc_genre
FROM disc
INNER JOIN artist ON disc.artist_id = artist.artist_id
ORDER BY disc.disc_title ASC

-- Liste déroulante pour les artist

SELECT * FROM artist


INSERT INTO artist (artist_id, artist_name)
VALUES (11, "Alice in Chains")


SELECT disc.artist_id FROM artist INNER JOIN disc ON artist.artist_id=disc.artist_id WHERE artist_name = "AC/DC"

SELECT * FROM disc INNER JOIN artist ON disc.artist_id=artist.artist_id WHERE disc_id=7

SELECT artist.artist_id FROM artist INNER JOIN disc ON artist.artist_id=disc.artist_id WHERE artist_name = 'Neil Young'

