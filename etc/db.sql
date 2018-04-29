-- Create the Database
CREATE DATABASE IF NOT EXISTS ark;
-- Create Users table
USE ark;
CREATE TABLE users (user CHAR(32) NOT NULL, hpass CHAR(255) NOT NULL, PRIMARY KEY (user));
-- Create Animals table
USE ark;
CREATE TABLE animals (id INT NOT NULL AUTO_INCREMENT, user CHAR(32) NOT NULL, species CHAR(16) NOT NULL, sex CHAR(1) NOT NULL, weight INT, color CHAR(16), birthdate DATE, name CHAR(32), PRIMARY KEY (id), FOREIGN KEY (user) REFERENCES users(user) ON DELETE CASCADE);
