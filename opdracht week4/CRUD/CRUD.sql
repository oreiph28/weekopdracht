-- Opdracht: Blog + database


-- 4 basis SQL functies: Create, Read, Update, Delete (CRUD):
-- =================================================

-- CREATE DATABASE crud_dbase;
-- CREATE TABLE `crud_table`. () ENGINE = Mysql;
-- SELECT * FROM crud_table;
-- UPDATE crud_table SET crud_text='upd1' WHERE id=2;
-- DELETE FROM crud_table WHERE id=3;


CREATE DATABASE crud_dbase;

USE crud_dbase;

CREATE TABLE crud_table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
crud_text VARCHAR(30) NOT NULL,
email VARCHAR(50)
);



INSERT INTO crud_table (id, crud_text, email)VALUES ('1', 'text1', 'a@h.nl');
INSERT INTO crud_table (id, crud_text, email)VALUES ('2', 'text2', 'b@h.nl');
INSERT INTO crud_table (id, crud_text, email)VALUES ('3', 'text3', 'c@h.nl');
INSERT INTO crud_table (id, crud_text, email)VALUES ('4', 'text4', 'd@h.nl');

SELECT * FROM crud_table;
UPDATE crud_table SET crud_text='upd1' WHERE id=2;
DELETE FROM crud_table WHERE id=3;