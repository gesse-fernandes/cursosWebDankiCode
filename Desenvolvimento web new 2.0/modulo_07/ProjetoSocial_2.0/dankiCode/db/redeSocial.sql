
use rede_social_curso_devweb2;
/*CREATE  table usuarios(
 id  int(11) not null PRIMARY  key auto_increment,
 nome varchar(255) NOT  NULL ,
 email varchar(255) not null,
 senha text not null

);*/


/*SELECT  * FROM  usuarios;*/

CREATE  TABLE amizades(
 id int(11) not null PRIMARY  key auto_increment,
 enviou int(11) not null,
 recebeu int(11) not null,
 status int(11)

);