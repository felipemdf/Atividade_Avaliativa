
# Projeto Avaliativo

**Passo 1:** Certifique-se se o PHP e o Composer e estão instalados

**Passo 2:** Crie um novo projeto Laravel com o comando `composer create-project --prefer-dist laravel/laravel nome_do_projeto`

**Passo 3:** Configure o banco sqlite criando um arquito database.sqlite na pasta database e alterando o DB_CONNECTION=sqlite no arquivo .env

**Passo 4:** Crie e configure um modelo e uma migration utilizando o comando `php artisan make:model Usuario -m`

**Passo 5:** Execute a migration `php artisan migrate`

**Passo 6:** Crie um controller utilizando o comando `php artisan make:controller UsuarioController`

**Passo 7:** Configure o arquivo de controller app/Http/controllers/UsuarioController.php e o arquivo routes/web.php 

**Passo 8:** Crie uma view para o formato base do html em resources/views/base.blade.php

**Passo 9:** Crie uma view para usuarios em resources/views/usuarios/index.blade.php

**Passo 9:** Inicialize o servidor usando o comando `php artisan serve` e acesse em `http://localhost:8000/items`

## Recursos do blade utilizados

* Condicionais: Foi usado a diretiva @if para verificar se há usuarios a serem exibidos, se a quantidade de usuarios for maior que zero exibimos a lista de usuarios, caso contrário, exibimos uma mensagem "Nenhum usuário encontrado."

* Laço de repetição: Foi usado a diretiva @foreach para iterar sobre a lista de itens e exibi-los na view.

* extensões: Foi utilizado a diretiva @extends para extender um layout base

