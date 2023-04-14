# Primeiro acesso a banco de dados
## Tarefas
### Banco de dados
- criar banco de dados contatos
- criar tabela pessoas com 2 colunas
    nome varchar(100)
    telefone varchar(50)
- cadastrar 5 pessoas
### PHP
- Criar a estrutura de tabela para listar os dados 
- Abrir a conexão com o banco de dados
- Criar o sql que será executado no banco de dados
- Executar o sql no banco de dados
- Exibir o retorno da execução em tela (trazer os dados)
- Encerrar a conexão com banco de dados

`INSERT INTO pessoas(nome, telefone) VALUES ('Diana Prince', '(19)99999-9898');` 
`INSERT INTO NOME DA TABELA (CAMPO1, CAMPO2) VALUES (VALOR1, VALOR2);`

`SELECT * FROM pessoas WHERE 1; vai trazer todas as pessoas`

`SELECT * FROM `pessoas` WHERE nome > 'guto xavier';`

`select * from pessoas where idade >= 18;`

`SELECT * FROM `pessoas` WHERE nome != 'guto xavier';`

`SELECT * FROM `pessoas` WHERE nome like 'guto%';` vai trazer todos os cadastro que comecem com a palavra guto

`SELECT * FROM `pessoas` WHERE nome like 'b%';` vai trazer todos os cadastros que comecem com a letra b

`SELECT * FROM `pessoas` WHERE nome like '%xavier';` vai trazer todos os cadastro que terminem com a palavra xavier

`SELECT * FROM `pessoas` WHERE nome like '%e';` vai trazer todos os cadastros que terminem com a letra e

`SELECT * FROM `pessoas` WHERE nome like '%de%';` vai trazer todos os cadastros que contenham de em qualquer lugar do nome
 
