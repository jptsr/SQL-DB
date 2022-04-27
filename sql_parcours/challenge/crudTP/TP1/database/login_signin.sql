CREATE TABLE tp1_user_login (
    id INT NOT NULL,
    username VARCHAR(50),
    password VARCHAR(25)
);

ALTER TABLE tp1_user_login
ADD PRIMARY KEY (id);

ALTER TABLE tp1_user_login
MODIFY id INT NOT NULL AUTO_INCREMENT;

ALTER TABLE tp1_user_login
MODIFY password VARCHAR(255);