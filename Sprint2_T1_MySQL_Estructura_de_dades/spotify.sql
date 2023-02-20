CREATE DATABASE spotify;

USE spotify;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL UNIQUE,
  usertype ENUM('free', 'premiun'),
  birth_date DATE NOT NULL,
  gender ENUM('M', 'F', 'O') NOT NULL,
  country VARCHAR(255) NOT NULL,
  postal_code VARCHAR(255) NOT NULL
);

CREATE TABLE subscriptions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  start_date DATE NOT NULL,
  renewal_date DATE NOT NULL,
  payment_method ENUM('credit_card', 'paypal') NOT NULL,
  card_number VARCHAR(255),
  card_expiration_month INT,
  card_expiration_year INT,
  card_security_code VARCHAR(255),
  paypal_username VARCHAR(255),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE payments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  subscription_id INT NOT NULL,
  date DATE NOT NULL,
  order_number VARCHAR(255) NOT NULL UNIQUE,
  total DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (subscription_id) REFERENCES subscriptions(id)
);

CREATE TABLE playlists (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  title VARCHAR(255) NOT NULL,
  song_count INT NOT NULL,
  creation_date DATE NOT NULL,
  is_deleted BOOLEAN NOT NULL DEFAULT 0,
  deleted_date DATE,
  FOREIGN KEY (user_id) REFERENCES users(id)
);




CREATE TABLE artists (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  image VARCHAR(255)
);


CREATE TABLE albums (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  release_year INT NOT NULL,
  artist_id INT NOT NULL,
  cover_image VARCHAR(255),
  FOREIGN KEY (artist_id) REFERENCES artists(id)
);

CREATE TABLE songs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  duration INT NOT NULL,
  play_count INT NOT NULL DEFAULT 0,
  album_id INT NOT NULL,
  FOREIGN KEY (album_id) REFERENCES albums(id)
);


CREATE TABLE playlist_songs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  playlist_id INT NOT NULL,
  song_id INT NOT NULL,
  added_by_user_id INT NOT NULL,
  added_date DATE NOT NULL,
  FOREIGN KEY (playlist_id) REFERENCES playlists(id),
  FOREIGN KEY (song_id) REFERENCES songs(id),
  FOREIGN KEY (added_by_user_id) REFERENCES users(id)
);




CREATE TABLE user_artists (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  artist_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (artist_id) REFERENCES artists(id)
);

CREATE TABLE artist_relations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  artist_id INT NOT NULL,
  related_artist_id INT NOT NULL,
  FOREIGN KEY (artist_id) REFERENCES artists(id),
  FOREIGN KEY (related_artist_id) REFERENCES artists(id)
);

CREATE TABLE user_favorites (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  album_id INT,
  song_id INT,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (album_id) REFERENCES albums(id),
  FOREIGN KEY (song_id) REFERENCES songs(id)
);
