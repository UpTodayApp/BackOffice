CREATE TABLE usuario (
  id int(11) NOT NULL AUTO_INCREMENT,
  NombreUsuario varchar(20),
  Contraseña varchar(15),
  Correo varchar(255),
  FechaNacimiento date,
  Reputacion int(3),
  Estado varchar(100),
  Pais varchar(20),
  Ciudad varchar(20),
  Biografia varchar(20),
  Redes varchar(20),
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE post (
  id int(11) NOT NULL AUTO_INCREMENT,
  contenido varchar(255) DEFAULT NULL,
  usuario int(11) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE comentario (
  id int(11) NOT NULL AUTO_INCREMENT,
  contenido varchar(255) DEFAULT NULL,
  usuario int(11) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  post_id int,
<<<<<<< HEAD
  MeGusta_id int,
=======
  FOREIGN KEY (post_id) REFERENCES post(id),
>>>>>>> origin/apiUsuario
  PRIMARY KEY (id)
);

CREATE TABLE MeGusta (
  id int(11) NOT NULL AUTO_INCREMENT,
  usuario int(11) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  comentario_id int,
  post_id int,
  FOREIGN KEY (comentario_id) REFERENCES comentario(id),
  FOREIGN KEY (post_id) REFERENCES post(id),
  PRIMARY KEY (id)
);