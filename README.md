# Warehouse System
by grgtr.io
@grglucastr

Este é um sistema para controle de transferência de bens entre Warehouses.

## Tecnologias Utilizadas

  * [Laravel Framework 5] - Para arquitetura do projeto, MVC, ORM, etc...
  * [MySql] - Como servidor de Banco de Dados
  * [MaterializeCSS] - Framework css utilizado para design gráfico. Auxilia em design responsivo etc...

## Version
1.0.0

## Instalação

Logo após clonar este repositório, você deverá executar os seguintes passos abaixo. (Espero que tenham configurado o PHP em suas variáveis de ambiente.)

### 1º Passo: Crie o banco de dados
Crie o banco de dados no MySQL

```sh
    create database warehouse_system_db
```

### 2º Passo: As informações do seu banco de dados no sistema
Altere os parâmetros do banco de dados nas variáveis de ambiente do sistema. Após fazer o download do código, vá até o diretório: 
```sh
caminho/para/sistema/warehouse-system/
```
e abra o arquivo .env com seu editor de texto (sugiro SublimeText ou Visual Studio Code) e altere as informações, tais como:

* DB_HOST=<Seu endereço de acesso ao banco> (Geralmente é o localhost)
* DB_PORT=<Porta do banco> (Geralmente é a 3306)
* DB_DATABASE=warehouse_system_db
* DB_USERNAME=<Seu nome de Usuário>
* DB_PASSWORD=<Sua senha>

Em seguida, edite as informações do arquivo database.php a partir da linha 57 com os dados do seu banco de dados. O arquivo database.php encontra-se no diretório descrito abaixo:

```sh
caminho/para/sistema/warehouse-system/config/database.php
```

### 3º Passo: Crie as tabelas no banco através das migrações

Agora, precisamos criar as tabelas no banco de dados a partir das migrations que ocorreram durante o desenvolvimento do sistema. Essas tabelas são aquelas tradicionais, que armazenam dados e se relacionam...

Para realizar criar as tabelas, primeiramente abra o terminal ou prompt de comando e acesse o diretório raíz do sistema: 

```sh
cd caminho/para/sistema/warehouse-system/
```

Em seguida, insira o seguinte código:

```sh
php artisan migrations:migrate
```

A partir disso, o sistema irá construir todas as tabelas no banco e irá executar o seeding, que é um processo de popular as tabelas com dados prévios.

### 4º Passo: Executar o sistema

Chegamos ao nosso último passo, a execução do sistema no browser. Para fazer isso, basta executar o seguinte comando: 

(Estou supondo que você ainda está no diretório raíz do sistema okay?)
```sh
php artisan serve
```
 E a partir disso, você estará apto para ver o sistema sendo executado no browser. Acredito que a URL para acesso seja:
```sh
http://localhost:8000/
```

Ao executar o comando deverá aparecer uma mensagem no terminal, ou promp de comando, assim:

```sh
Laravel development server started on http://localhost:8000/
```

[//]: # (Links para referência)

   [Laravel Framework 5]: https://lavarel.com
   [MySqL]: https://mysql.com
   [MaterializeCSS]: https://materializecss.com
