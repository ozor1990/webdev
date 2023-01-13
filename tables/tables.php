CREATE DATABASE webdev;




CREATE TABLE user_register_table (
	ID int(10) Not Null AUTO_INCREMENT,
 FirstName varchar(255),
 LastName varchar(255),
 Email varchar(255) UNIQUE,
 Password varchar(255),
 Phone varchar(255),
 Date timestamp(3),
  PRIMARY KEY (ID)


);