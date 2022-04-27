-- Il faut insérer 5 randonnées. Chaque randonnée devra renseigner les champs :
-- name - difficulty (très facile, facile, etc.) - distance - duration
-- height_difference (dénivelé)
INSERT INTO hiking VALUES (0, 'La montée au Piton des Neiges depuis le Bloc à Cilaos', 'Difficile', 15.5, '08:00:00', 1690);
INSERT INTO hiking VALUES (0, 'Le Piton de la Fournaise depuis le Pas de Bellecombe', 'Moyen', 12.3, '05:00:00', 272);
INSERT INTO hiking VALUES (0, 'Une boucle vers Grand Bassin par Bois Court et le Sentier Mollaret', 'Difficile', 13.9, '06:00:00', 1050);
INSERT INTO hiking VALUES (0, 'Du Col des Bœufs à la Nouvelle et retour', 'Moyen', 15.1, '05:00:00', 820);
INSERT INTO hiking VALUES (0, 'Aurère par le Sentier Scout depuis le Bélier', 'Difficile', 17.8, '06:30:00', 1200);

CREATE TABLE user_login (
    name VARCHAR(50),
    password VARCHAR(25)
);

INSERT INTO user_login VALUES
("lol", "404lol"),
("babouin", "street97"),
("caroussel", "94ftg");
-- OK

INSERT INTO user_login VALUES
("aha", "aha");
-- OK