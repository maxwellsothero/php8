CREATE TABLE tb_category(id INT(11) PRIMARY KEY AUTO_INCREMENT,name VARCHAR (20) NOT NULL);

INSERT INTO tb_category(name) VALUES ('Chachaça'),('Cerveja');

CREATE TABLE tb_bebidas(
    id INT(11)PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(20) NOT NULL,
    descricao VARCHAR(20) NOT NULL,
    preco FLOAT(10) NOT NULL,
    quantidade INT(10) NOT NULL,
    foto VARCHAR(256) NOT NULL);

INSERT INTO tb_bebidas(titulo,descricao,preco,quantidade,foto) VALUES ('Refri','Refri de laranja','10','10','/img/refri.jpg');    