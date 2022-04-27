CREATE TABLE tp2_client (
    client_id INT NOT NULL,
    name VARCHAR(50),
    firstname VARCHAR(50),
    date DATE,
    adress TEXT,
    zip_code VARCHAR(5),
    phone_nber VARCHAR(10),
    marital_id INT,
    credit TINYINT
);

ALTER TABLE tp2_client
ADD PRIMARY KEY (client_id);

ALTER TABLE tp2_client
MODIFY client_id INT NOT NULL AUTO_INCREMENT;

-- ALTER TABLE tp2_client AUTO_INCREMENT = 1;