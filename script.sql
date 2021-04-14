mysql -u root -p
password

verificando banco de dados
SHOW DATABASES
;

//Criando banco de dados
CREATE DATABASE teste;

USE teste;

//Criando tabela clientes
CREATE TABLE usuarios(id INT PRIMARY KEY AUTO_INCREMENT, senha VARCHAR(60) NOT NULL,nome VARCHAR(30) NOT NULL,imagem VARCHAR(100) NOT NULL);
    

//Polvoando banco
insert into teste.usuarios ( senha, nome, imagem)
values('$2y$12$b3/9HDbecFkVAWgLEkdjxuHj5WpydzEMshtOnAFHMflRuiYa.XmDC','Sandro','imagem.jpg');



//Verificando os clientes
select * from usuarios;

CREATE TABLE comentarios
     (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    imagem VARCHAR(100) NOT NULL,
    comentario VARCHAR(400)NOT NULL
    );

insert into teste.comentarios (nome, imagem, comentario)
values('Sandro','america.jpg','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites');

select * from comentario;

DROP TABLE comentarios;
DROP TABLE usuario;



-- https://www.notion.so/Como-instalar-um-servidor-LAMP-em-uma-inst-ncia-EC2-da-AWS-abf338dec4d0443c80987c11469e8ea2
