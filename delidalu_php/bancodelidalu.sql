drop schema delidalu;

create schema if not exists delidalu default character set utf8;
use delidalu;

create table if not exists cliente (
	id int not null primary key auto_increment, 
	nome varchar(50), 
    cpf varchar(15), 
    endereco varchar(100), 
    email varchar(50), 
    telefone varchar(15),
	senha varchar(255));

create table if not exists estoque (
    id int not null primary key auto_increment,
    imagem varchar(255),
    nome varchar(50), 
    quantidade int, 
    preco double);

create table if not exists clientepedido (id int not null primary key auto_increment, idcliente int not null, idestoque int not null, quantidadepedido int, totalpedido double, datapedido date,
foreign key (idcliente) references cliente(id),
foreign key (idestoque) references estoque(id));

select id, idcliente, idestoque, quantidadepedido, totalpedido, date_format(datapedido, '%d/%m/%y') as datapedido from clientepedido;

-- SELECTS --
select * from cliente;

select * from estoque;

select * from clientepedido;

select cp.id as ID, c.nome as Cliente, c.endereco as Endereço, e.nome as Produto, cp.quantidadepedido as Quantidade
, cp.totalpedido as Total, cp.datapedido as Data_Pedido FROM clientepedido as cp
INNER JOIN cliente as c on cp.idcliente = c.id
INNER JOIN estoque as e on cp.idestoque = e.id;


-- TRIGGERS --

DELIMITER //
create trigger reduzir_estoque
after insert on clientepedido
for each row 
BEGIN
update estoque set quantidade = quantidade - new.quantidadepedido where id = new.idestoque;
END //

DELIMITER ;

DELIMITER //
create trigger repor_estoque
before delete on clientepedido
for each row 
BEGIN
update estoque set quantidade = quantidade + old.quantidadepedido where id = old.idestoque;
END //

DELIMITER ;

DELIMITER //
create trigger calc_total
before insert on clientepedido
for each row 
BEGIN
DECLARE preco_calc double;

select preco into preco_calc
from estoque
where id = new.idestoque;
 
set new.totalpedido = (preco_calc * new.quantidadepedido);
END //

DELIMITER ;

DELIMITER //
create trigger calc_total2
before update on clientepedido
for each row 
BEGIN
DECLARE preco_calc double;

select preco into preco_calc
from estoque
where id = new.idestoque;
 
set new.totalpedido = (preco_calc * new.quantidadepedido);
END //

DELIMITER ;


