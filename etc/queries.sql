/*
  CS 270 - Group Project
  ARK (Animal Record Keeper)
  Trevor D. Brown, Jamie Thomas, Colin Whitesel, Brian Bulka

  queries.sql - a file of raw queries, with PHP varible fillers for dynamic data.
*/

-- Insert a new entry in the user table
INSERT INTO users (user, hpass) VALUES ($user, $password);

/*
  Insert a new animal in the animal table
  Note: the following fields can be NULLed:
  - weight
  - color
  - birthdate
  - animal name
*/
INSERT INTO animals (id, user, species, sex, weight, color, birthdate, name) VALUES (NULL, $owner, $species, $gender, $weight, $color, $birthdate, $animalname);

-- Update a user's password
UPDATE users SET `hpass`=$password WHERE user = $originalusername;

-- Update a user's name
UPDATE users SET `user`=$username WHERE user = $originalusername;

/*
  Update a animal record in the animal table based on $animalid
  Note: the following fields can be NULLed:
  - weight
  - color
  - birthdate
  - animal name
*/
UPDATE animals SET `id`= NULL,`user`=$owner,`species`=$species,`sex`=$gender,`weight`=$weight,`color`=$color,`birthdate`=$birthdate,`name`=$animalname WHERE id = $animalid;
