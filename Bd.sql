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

INSERT INTO image(idProduct ,src)
VALUES (1,'img/salgados.jfif');