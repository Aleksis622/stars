/*CREATE DATABASE SIPOLS;
*/
/*USE SIPOLS;
*/
/*CREATE TABLE USERS (
  ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  USERNAME VARCHAR(12) NOT NULL, 
  PASS VARCHAR(50) NOT NULL
);*/

/*INSERT INTO USERS
(USERNAME,PASS)

VALUES 
("ADMIN","PAROLE123"); 
*/

SELECT * FROM USERS;

-- IZVEIDO TABULU ZVAIGZNU ATTELU SAGLABASANAI
--  STARS
-- IMAGE
-- ID
-- USER_ID

CREATE TABLE STARSS(
  ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  IMAGE VARCHAR(50) NOT NULL, 
  USER_ID INT NOT NULL
  
  );