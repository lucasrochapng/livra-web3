Etapas para abrir o site:

1 - Abrir a pasta do banco e copiar o endereço da pasta (ex: C:\xampp\mysql\bin)
2 - Abrir o CMD
3 - Abrir a pasta no CMD (cd C:\xampp\mysql\bin)
4 - Startar o XAMPP
5 - Usar o comando "mysql -u root -p
6 - Dar um enter, pois a senha root por padrão é nula
7 - Criar um database: "create database livra;"
8 - Usar o database criado: "use livra;"
9 - Criar a tabela livro:

CREATE TABLE livro (
  id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(100),
  autor VARCHAR(100),
  categoria VARCHAR(100),
  descricao VARCHAR(100)
);

10 - Abrir o navegador e digitar na barra de navegação "localhost/livra"
