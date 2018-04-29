-- Prepopulate Database
-- Users
USE ark;
INSERT INTO users (user, hpass) VALUES ("trevor", "a");
USE ark;
INSERT INTO users (user, hpass) VALUES ("colin", "b");
USE ark;
INSERT INTO users (user, hpass) VALUES ("jamie", "c");
USE ark;
INSERT INTO users (user, hpass) VALUES ("brian", "d");
-- Animals
USE ark;
INSERT INTO animals (id, user, species, sex, weight, color, birthdate, name) VALUES (NULL, "trevor", "Hereford Cow", "M", 1000, "Brown", "2018-04-25", "Jordan");
USE ark;
INSERT INTO animals (id, user, species, sex, weight, color, birthdate, name) VALUES (NULL, "colin", "Potbelly Pig", "F", NULL, "Pink", "2018-04-25", NULL);
