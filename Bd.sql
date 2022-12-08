create DATABASE projeto_odaw;

use projeto_odaw;

use projeto_odaw;

create table category (
    idCategory int NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    PRIMARY KEY (idCategory)
);

create table product (
	id int NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    description text,
    price float,
    discount float,
    publicationDate date,
    idCategory int,
    quantity int,
    PRIMARY KEY (id),
    FOREIGN KEY (idCategory) REFERENCES category(idCategory)
 );

create table image (
    id int NOT NULL AUTO_INCREMENT,
    idProduct int NOT NULL,
    src text,
    PRIMARY KEY (id),
    FOREIGN KEY (idProduct) REFERENCES product(id)
);

INSERT INTO category (name)
VALUES 
    ('Salgados'),
    ('Doces');


INSERT INTO product(name, description, price, discount, publicationDate, idCategory, quantity)
VALUES ('Coxinha', 'um salgadinho brasileiro, de origem paulista, também comum em Portugal, feito com massa de farinha de trigo e caldo de galinha, que envolve um recheio elaborado com carne temperada de frango, queijo, calabresa ou vários outros tipos de sabores', 1.0, 0.0, now(), 1, 200);

INSERT INTO product(name, description, price, discount, publicationDate, idCategory, quantity)
VALUES ('Cupcake', 'De origem norte-americana, o cupcake (ou bolo de xícara) conquistou de vez os brasileiros. Feito com massa de bolo, recheio e cobertura, o cupcake é suculento, saboroso e tem uma apresentação linda, podendo ser entregue como presente ou em ocasiões especiais, no lugar do bem casado, por exemplo.', 5.0, 10, now(), 2, 5);

INSERT INTO product(name, description, price, discount, publicationDate, idCategory, quantity)
VALUES ('Croquete', 'O croquete é uma invenção holandesa, criada no começo do século XX pelo padeiro Kwekkeboom, holandês que viveu na França. Em 1909 ele elaborou a receita do croquete recheado, adaptado dos bolinhos franceses que usavam todos os tipos de recheio.', 1.5, 0.0, now(), 1, 100);

INSERT INTO product(name, description, price, discount, publicationDate, idCategory, quantity)
VALUES ('Brigadeiro', 'O brigadeiro é um doce típico da culinária brasileira,[1] de origem paulista,[2][3] na qual rapidamente se difundiu pelo resto do país, tornando-se comum em todo o país a sua presença em festas de aniversário, junto com doces como o cajuzinho e o beijinho.', 1.0, 5, now(), 2, 100);

INSERT INTO product(name, description, price, discount, publicationDate, idCategory, quantity)
VALUES ('Macaron', 'O macaron é um doce francês superdelicado e delicioso que ganhou o coração dos brasileiros! ', 10.0, 20, now(), 2, 20);


INSERT INTO image(idProduct ,src)
VALUES (1,'img/salgados.jfif');

INSERT INTO image(idProduct ,src)
VALUES (2,'img/cupcake.jpg');

INSERT INTO image(idProduct ,src)
VALUES (3,'img/croquetes.jpg');

INSERT INTO image(idProduct ,src)
VALUES (4,'img/brigadeiro.jpg');

INSERT INTO image(idProduct ,src)
VALUES (5,'img/macarons.jpg');