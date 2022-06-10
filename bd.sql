create database projeto;
use projeto;

create table produto(
codigo bigint primary key auto_increment,
nome varchar(100),
tamanhop varchar(100),
tamanhom varchar(100),
tamanhog varchar(100),
precop numeric (18, 2),
precom numeric (18, 2),
precog numeric (18, 2),
descricao varchar(100)
);

insert into produto values
(DEFAULT, 'Luzes', 'P', 'M', 'G', 150.00, 250.00, 350.00, 'Iluminação ou Global'),
(DEFAULT, 'Coloração', 'P', 'M', 'G', 90.00, 150.00, 230.00, 'Escolha o tom da sua preferência'),
(DEFAULT, 'Corte', 'Corte', '', '', 60.00, '', '', 'Várias opções e estilos'),
(DEFAULT, 'Progressiva', 'P', 'M', 'G', 100.00, 150.00, 200.00, 'Cabelos lisos e alinhados'),
(DEFAULT, 'Escova', 'P', 'M', 'G', 60.00, 80.00, 100.00, 'Escova com ou sem chapinha'),
(DEFAULT, 'Tratamento', 'P', 'M', 'G', 70.00, 90.00, 110.00, 'Hidratação, Nutrição ou Reconstrução'),
(DEFAULT, 'Manicure', 'Manicure', '', '', 30.00, '', '', 'Cutilagem e pintura'),
(DEFAULT, 'Pedicure', 'Pedicure', '', '', 50.00, '', '', 'Cutilagem, pintura e spa dos pés');



drop table produto;

select * from produto;

