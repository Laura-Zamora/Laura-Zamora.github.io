<?php
$servername = "localhost";
$username = "root";
$password = "";
try {
$conn = new PDO("mysql:host=$servername",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$SQL = "CREATE DATABASE IF NOT EXISTS ALLEATO_JURIDICO;

USE ALLEATO_JURIDICO;

/*
CREATE TABLE IF NOT EXISTS usuarios(
  cod_usuario VARCHAR(10) NOT NULL PRIMARY KEY,
  nom_usuario VARCHAR(5) NOT NULL NULL
);

INSERT INTO usuarios VALUES('001','administrador');
INSERT INTO usuarios VALUES('002','abogado');
INSERT INTO usuarios VALUES('003','cliente');
*/

CREATE TABLE IF NOT EXISTS administrador(

  numd_administrador VARCHAR(15) NOT NULL PRIMARY KEY,
  nom_administrador VARCHAR(20) NOT NULL,
  ape_administrador VARCHAR(20) NOT NULL,
  genero_administrador VARCHAR(10) NOT NULL,
  tel_administrador VARCHAR(15) NOT NULL,
  direccion_administrador VARCHAR(30) NOT NULL,
  email_administrador VARCHAR (30) NOT NULL UNIQUE ,
  clave_administrador VARCHAR (50) NOT NULL,
  INDEX(email_administrador)
);

INSERT INTO administrador(numd_administrador,nom_administrador,ape_administrador,genero_administrador,tel_administrador,direccion_administrador,email_administrador,clave_administrador)
VALUES('1003826989','Laura Carolina','Zamora Guzman','Femenino','3015550064','ojo de agua','lauza_17@hotmail.com','12345');

CREATE TABLE IF NOT EXISTS abogados(
  numd_abogado VARCHAR(15) NOT NULL PRIMARY KEY,
  nom_abogado VARCHAR(20) ,
  ape_abogado VARCHAR(20) ,
  genero_abogado VARCHAR(20) ,
  tel_abogado VARCHAR(15) ,
  direccion_abogado VARCHAR(30)  ,
  email_abogado VARCHAR (30) NOT NULL UNIQUE ,
  clave_abogado VARCHAR (50) NOT NULL,
  INDEX(email_abogado)
);


CREATE TABLE IF NOT EXISTS casos(
  cod_caso INT AUTO_INCREMENT PRIMARY KEY ,
  estado_caso TEXT,
  identificacion_cliente VARCHAR(15) ,
  nombre_cliente VARCHAR(15) ,
  telefono_cliente VARCHAR(15) ,
  email_cliente VARCHAR (30) ,
  situacion_juridica TEXT,
  ultima_actualizacion TEXT,
  pendientes TEXT,
  numd_abogado VARCHAR(15) ,
  INDEX (numd_abogado),
  FOREIGN KEY (numd_abogado) REFERENCES abogados(numd_abogado)
);





";


$conn->exec($SQL);
} catch (PDOException $e) {
echo $SQL."<br>".$e->getMessage();
}
?>
