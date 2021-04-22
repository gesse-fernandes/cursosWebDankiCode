
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
/*INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `ultimo_post`, `img`) VALUES

(1, 'Guilherme Grillo', 'guilhermegrillo.13@gmail.com', '$2a$08$MTQwNDExODAxOTYwN2RhNOR5/AqYak4c6KSVIlkxE9Xfrr7QWRdq2', '2021-04-14 22:10:34', '607da5ad82b62.jpg'),

(2, 'William', 'gui_grillo13@hotmail.com', '$2a$08$NDIyMDExNDc5NjA0Nzk3OOwXZD/cxhWlx1AUQREZroTYBEvgNmZm2', '0000-00-00 00:00:00', ''),

(3, 'Joao Ferreira', 'joaozinho@hotmail.com', '$2a$08$NDIyMDExNDc5NjA0Nzk3OOwXZD/cxhWlx1AUQREZroTYBEvgNmZm2', '2021-04-12 15:41:16', ''),

(4, 'Pedro', 'joaozinho1@gmail.com', '$2a$08$NDIyMDExNDc5NjA0Nzk3OOwXZD/cxhWlx1AUQREZroTYBEvgNmZm2', '2021-04-19 12:51:52', '607da75aa16bb.jpg'),

(5, 'Joao Lucas', 'joaozinho2@gmail.com', '$2a$08$NDIyMDExNDc5NjA0Nzk3OOwXZD/cxhWlx1AUQREZroTYBEvgNmZm2', '2021-04-12 15:41:39', '');*/

