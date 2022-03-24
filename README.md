# Projeto Livraria - API
---
O objetivo deste projeto é utilizar uma API para consumo do Frontend de uma livraria, contendo as funções de incluir, editar e excluir livros do sistema.

#### Tecnlogias Utilizadas
- Laravel 9
- PHP 8
- Composer
- MySQL

#### Instruções MySQL 
O projeto utiliza o banco de dados MySQL para armazenar as informações dos livros. 
- Instale o MySQL
- Com o MySQl instalado e configurado, crie um novo banco de dados com nome "livraria".

#### Instruções Laravel API
O projeto utiliza o Laravel 9, juntamente com o PHP 8 e o composer, como framework para a API de comunicação entre o frontend e o banco de dados.

- Instale o PHP 8
- Instale o Composer
- Copie e cole o arquivo .env.exemple como .env e configure o banco de dados "livraria" assim como o username e password do seu MySQL
- No terminal entre na pasta "livraria-api-laravel" 
- Execute o comando: "composer install" para que as dependencias da API sejam instaladas
- Execute o comando: "php artisan migrate" para que a tabelas do banco de dados sejam criadas
- Execute o comando "php artisan serve" para que o servidor do Laravel seja carregado
