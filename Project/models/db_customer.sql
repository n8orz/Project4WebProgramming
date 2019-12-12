
/* Create the database and check if it does not exist */
CREATE DATABASE IF NOT EXISTS Project_4;

/* Use this database for all the query from here */
USE Project_4;

/* Create the table customer to hold customer info */
CREATE TABLE customer(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(255) NOT NULL,
  lname VARCHAR(255) NOT NULL,
  email VARCHAR(255),
  password VARCHAR(100) NOT NULL,
  pnumber VARCHAR(20) NOT NULL
);

/* Create the Parking Table */
CREATE TABLE parking(
  park_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  park_space INT NOT NULL DEFAULT '1',
  park_price INT NOT NULL
);
