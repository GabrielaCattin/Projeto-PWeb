create database projeto;
use projeto;

create table produto(
codigo bigint primary key auto_increment,
nome varchar(100),
preco numeric (18, 2),
descricao varchar(100)
);

insert into produto values
(DEFAULT, 'Luzes',  150.00, 'Iluminação ou Global'),
(DEFAULT, 'Coloração', 90.00, 'Escolha o tom da sua preferência'),
(DEFAULT, 'Corte',  60.00, 'Várias opções e estilos'),
(DEFAULT, 'Progressiva', 100.00, 'Cabelos lisos e alinhados'),
(DEFAULT, 'Escova', 60.00, 'Escova com ou sem chapinha'),
(DEFAULT, 'Tratamento', 70.00, 'Hidratação, Nutrição ou Reconstrução'),
(DEFAULT, 'Manicure', 30.00, 'Cutilagem e pintura'),
(DEFAULT, 'Pedicure', 50.00, 'Cutilagem, pintura e spa dos pés');


select * from produto;


select * from cesta;

create table cesta (
codigo bigint primary key auto_increment,
codigoProduto bigint,
quantidade int(3),
sessionId varchar(100)
);

