-- Affiche toutes les données.
SELECT * FROM students, school;
SELECT * FROM students
INNER JOIN school ON students.school = school.idschool;
-- Affiche uniquement les prénoms.
SELECT nom FROM students;
-- Affiche les prénoms, les dates de naissance et l’école de chacun.
SELECT prenom, datenaissance, school.school FROM students
INNER JOIN school ON students.school = school.idschool;
-- Affiche uniquement les élèves qui sont de sexe féminin.
SELECT * FROM students WHERE genre = 'F';
-- Affiche uniquement les élèves qui font partie de l’école Andy.
SELECT * FROM students WHERE school = 2;
-- Affiche uniquement les prénoms des étudiants, par ordre inverse à l’alphabet (DESC). Ensuite, la même chose mais en limitant les résultats à 2.
SELECT prenom FROM students ORDER BY prenom DESC;
SELECT prenom FROM students ORDER BY prenom DESC LIMIT 2;
-- Ajoute Ginette Dalor, née le 01/01/1930 et affecte-la à Central, toujours en SQL.
INSERT INTO students VALUES (0, 'Dalor', 'Ginette', '1930-01-01', 'F', 1);
-- Modifie Ginette (toujours en SQL) et change son sexe et son prénom en “Omer”.
UPDATE students
SET prenom = 'Omer', genre = 'M'
WHERE nom = 'Dalor';
-- Supprimer la personne dont l’ID est 3.
DELETE FROM students WHERE idStudent = 3;
-- Modifier le contenu de la colonne School de sorte que "1" soit remplacé par "Central" et "2" soit remplacé par "Anderlecht". (attention au type de la colonne !)
UPDATE school
SET school = "Central" WHERE idschool = 1;
UPDATE school
SET school = "Anderlecht" WHERE idschool = 2;
-- Faire d’autres manipulations pour voir si t’es bien compris.
SELECT * FROM school
RIGHT JOIN students ON school.idschool = students.school
ORDER BY nom ASC;