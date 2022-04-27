CREATE TABLE tp1_user (
    id INT NOT NULL,
    name VARCHAR(50),
    firstname VARCHAR(50),
    date DATE,
    adress TEXT,
    zip_code VARCHAR(5),
    phone_nber VARCHAR(10),
    department INT
);
-- OK

ALTER TABLE tp1_user
ADD PRIMARY KEY (id);
-- OK

INSERT INTO tp1_user
VALUES
(0, "Barbe", "Apapa", "1974-10-02", "Rue Multicolor 47, Babaland", "19740", "0485012021", 1),
(0, "Maya", "Thebee", "1975-01-26", "Rue Au Miel 207, Yellowland", "19750", "0421254899", 2),
(0, "Lucky", "Luke", "1968-04-14", "Rue Farwest 71, Daltonland", "19680", "0493025134", 3),
(0, "Simp", "Sons", "1989-12-17", "Rue Homer 117, Margeland", "19890", "0412658402", 4);