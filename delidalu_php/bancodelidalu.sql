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
    idproduto int not null primary key auto_increment,
    imagem varchar(500),
    nome varchar(50), 
    quantidade int, 
    preco double);
    
insert into estoque values 
(null,"https://harald.com.br/wp-content/uploads/2020/04/briadeirogormet-melken-700x520-1.jpg","Brigadeiro",55,12.65),
(null,"https://paleoglutenfree.com/wp-content/uploads/2019/01/best-homemade-brownies-8-of-14-900x1340.jpg","Brownie",40,18.99),
(null,"https://files.qatarliving.com/post/2022/07/28/CHUROS-MIA-CAFE-Qatar-Living%20(1).jpg","Churros",60,7.55);


create table if not exists clientepedido (idcliente int not null, idestoque int not null, quantidadepedido int, totalpedido double, datapedido date,
foreign key (idcliente) references cliente(id),
foreign key (idestoque) references estoque(idproduto));

select id, idcliente, idestoque, quantidadepedido, totalpedido, date_format(datapedido, '%d/%m/%y') as datapedido from clientepedido;

-- SELECTS --
select * from cliente;

select * from estoque;

select * from clientepedido;

select cp.id as ID, c.nome as Cliente, c.endereco as Endereço, e.nome as Produto, cp.quantidadepedido as Quantidade
, cp.totalpedido as Total, cp.datapedido as Data_Pedido FROM clientepedido as cp
INNER JOIN cliente as c on cp.idcliente = c.id
INNER JOIN estoque as e on cp.idestoque = e.idproduto;


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
where idproduto = new.idestoque;
 
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
where idproduto = new.idestoque;
 
set new.totalpedido = (preco_calc * new.quantidadepedido);
END //

DELIMITER ;
select * from estoque;

select * from clientepedido;

insert into clientepedido (idcliente, idestoque, quantidadepedido, datapedido) values (1, 2, 3, curdate());




