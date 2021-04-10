mysql -u root -p
password

verificando banco de dados
SHOW DATABASES
;

//Criando banco de dados
CREATE DATABASE teste;

USE teste;

//Criando tabela clientes
CREATE TABLE usuarios(id INT PRIMARY KEY AUTO_INCREMENT,nome VARCHAR(30) NOT NULL,imagem VARCHAR(100), senha VARCHAR(100));
    

//Polvoando banco
insert into teste.usuarios (nome, imagem, senha)
values('Sandro','imagem.jpg','$2y$12$b3/9HDbecFkVAWgLEkdjxuHj5WpydzEMshtOnAFHMflRuiYa.XmDC');



//Verificando os clientes
select * from usuarios;

CREATE TABLE comentarios
     (
    id INT PRIMARY KEY AUTO_INCREMENT ,
    nome VARCHAR(30) NOT NULL,
    imagem VARCHAR(100) NOT NULL,
    comentario VARCHAR(300)NOT NULL
    );

insert into teste.comentarios (nome, imagem, comentario)
values('Sandro','imagem.jpg','Um comentario sobre a pagina');

select * from comentario;

DROP TABLE comentario;
DROP TABLE usuario;



-- https://www.notion.so/Como-instalar-um-servidor-LAMP-em-uma-inst-ncia-EC2-da-AWS-abf338dec4d0443c80987c11469e8ea2