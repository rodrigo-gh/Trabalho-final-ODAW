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
    idProduct int,
    src text,
    FOREIGN KEY (idProduct) REFERENCES product(id)
);