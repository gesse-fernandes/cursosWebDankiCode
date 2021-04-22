
use rede_social_curso_devweb2;
CREATE  table usuarios(
 id  int(11)  PRIMARY  key auto_increment,
 nome varchar(255)  ,
 email varchar(255),
 senha text,
 ultimo_post datetime,
 img text
);


/*SELECT  * FROM  usuarios;*/


/*CREATE  TABLE amizades(
 id int(11) not null PRIMARY  key auto_increment,
 enviou int(11) not null,
 recebeu int(11) not null,
 status int(11)*/

);
/*
CREATE TABLE `posts` (

  `id` int(11) NOT NULL,

  `usuario_id` int(11) NOT NULL,

  `post` text NOT NULL,

  `date` datetime NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;*/

