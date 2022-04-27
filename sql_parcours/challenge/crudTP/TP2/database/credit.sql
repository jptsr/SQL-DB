CREATE TABLE tp2_credit (
    client_id INT NOT NULL,
    organization VARCHAR(50),
    amount FLOAT
);

ALTER TABLE tp2_credit
ADD PRIMARY KEY (client_id);