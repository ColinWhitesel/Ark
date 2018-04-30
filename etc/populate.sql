-- Prepopulate Database
-- Users
USE ark;
INSERT INTO users (user, hpass) VALUES ("trevor", "$2y$10$kpyksBA.TUyLcqOKzax7zuwYc6tszj6f0Q8OI/Mqp0Kt2hnvx9/la");
USE ark;
INSERT INTO users (user, hpass) VALUES ("colin", "$2y$10$kpyksBA.TUyLcqOKzax7zuwYc6tszj6f0Q8OI/Mqp0Kt2hnvx9/la");
USE ark;
INSERT INTO users (user, hpass) VALUES ("jamie", "$2y$10$kpyksBA.TUyLcqOKzax7zuwYc6tszj6f0Q8OI/Mqp0Kt2hnvx9/la");
USE ark;
INSERT INTO users (user, hpass) VALUES ("brian", "$2y$10$kpyksBA.TUyLcqOKzax7zuwYc6tszj6f0Q8OI/Mqp0Kt2hnvx9/la");
-- Animals
USE ark;
INSERT INTO animals (id, user, species, sex, weight, color, birthdate, name) VALUES (NULL, "trevor", "Hereford Cow", "M", 1000, "Brown", "2018-04-25", "Jordan");
USE ark;
INSERT INTO animals (id, user, species, sex, weight, color, birthdate, name) VALUES (NULL, "colin", "Potbelly Pig", "F", NULL, "Pink", "2018-04-25", "Pig 1");
USE ark;
INSERT INTO animals (id, user, species, sex, weight, color, birthdate, name) VALUES (NULL, "jamie", "Giraffe", "M", 2600, "Yellow", "2018-04-29", "Giraffe 1");
USE ark;
INSERT INTO animals (id, user, species, sex, weight, color, birthdate, name) VALUES (NULL, "brian", "Wolf", "F", 200, "Gray", "2018-04-29", "Jacob");
USE ark;
INSERT INTO animals (id, user, species, sex, weight, color, birthdate, name) VALUES (NULL, "trevor", "Chicken", "F", NULL, "White", "2018-04-01", "Reba");
USE ark;
INSERT INTO animals (id, user, species, sex, weight, color, birthdate, name) VALUES (NULL, "colin", "Frog", "F", NULL, "Green", "2018-04-25", "Kermit");
