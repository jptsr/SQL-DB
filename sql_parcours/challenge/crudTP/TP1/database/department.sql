CREATE TABLE TP1_department (
    id INT NOT NULL,
    name VARCHAR(50),
    description VARCHAR (100)
); -- OK

ALTER TABLE TP1_department 
ADD PRIMARY KEY (id);
-- OK

ALTER TABLE TP1_department
MODIFY id INT NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 1;
-- OK

INSERT INTO TP1_department
VALUES
(0, "Maintenance", "Les spécialistes du Hardware"),
(0, "Web Developer", "Pour eux tout est code"),
(0, "Web Designer", "Y a que le CSS dans la vie"),
(0, "Reférenceur", "Regarde les Serps Google du matin au soir et du soir au matin");
-- OK

ALTER TABLE TP1_department AUTO_INCREMENT = 1;