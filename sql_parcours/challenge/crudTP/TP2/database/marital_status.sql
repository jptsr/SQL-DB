CREATE TABLE tp2_marital_status (
    marital_id INT NOT NULL,
    status VARCHAR(50)
);

ALTER TABLE tp2_marital_status
ADD PRIMARY KEY (marital_id);

INSERT INTO tp2_marital_status VALUES
(1, "single"),
(2, "cohabitation"),
(3, "divorced"),
(4, "widow(er)");

-- ALTER TABLE tp2_marital_status AUTO_INCREMENT = 5;