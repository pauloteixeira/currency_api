# CURRENCY API
Esta APP trata-se uma API que lista informações sobre moédas

## TECNOLOGIAS
- NGINX
- PHP7.3-fpm
- Laravel
- MariaDB
- Docker

## INICILIZAÇÃO DA APLICAÇÃO
Para inicializar o projeto você precisará ter o docker na sua maquina para poder usar o docker-compose.

OBS. 
- Você precisa garantir que nenhum serviço, ou docker, ou algo como nginx, apache, iis esteja utilizando a porta 80 da sua maquina, e também será necessário que a porta 3306 esteja liberada, pois o Docker vai iniciar o nginx desse projeto nestas portas da sua maquina.
- Caso tenha o mysql localmente rodando na maquina que fará o teste, alterar a porta da imagem do docker no arquivo docker-compose.yml
- Será necessário ter o php e o composer configurado na maquina de quem for testar. (Para instalação e configuração seguir instruções no link: https://getcomposer.org/download/)
- Para instalar o docker seguir as instruções no link: https://docs.docker.com/desktop/install/windows-install/

Caso não tenha o PHP e o composer na maquina, pode optar por executar o composer dentro da imagem do container, as instruições estarão na parte de INSTALAÇÃO DO LARAVEL

Tendo o Docker configurado e todos os pré-requisitos na maquina basta seguir os passos abaixo:

```bash
$ cd src
$ docker-compose up -d
```

O docker deverá ter criado os 3 containers a seguir:
- app
- server
- db 

## INSTALAÇÃO DO LARAVEL
Navegue até a pasta src do projeto e execute o comando abaixo:
```bash
$ composer update
```

## C0NFIGURANDO O BANCO DA APLICAÇÃO
O Docker irá montar uma imagem com o MySQL já configurado.

Por default o docker vai criar uma imagem já com a senha currencyApp!6877 configurada. Então basta tentar logar por sua IDE favorita utilizando username: root e password: currencyApp!6877.
Se ocorrer tudo certo com login e senha basta executar o script de criação da tabela abaixo:

Então ainda na pasta src execute o comando abaixo para criar a estrutura de migrations no banco
```bash
$ php artisan migrate
```

Na raiz do repositório contém o modelo das tabelas da API num arquivo do MySQLWorkbench com o nome ModeloTabelasCurrency.mwb.

## TESTES UNITÁRIOS
Para execução dos testes unitãrios execute os comandos abaixo na pasta src do projeto

```bash
$ vendor/bin/phpunit
```

## UTILIZAR A APLICAÇÃO
A lista de endpoints implementadas são:

- [GET] - [http://localhost/api/v1/hc](http://localhost/#1)
- [POST] - [http://localhost/api/v1/code](http://localhost/#2)
- [POST] - [http://localhost/api/v1/code/list](http://localhost/#3)
- [POST] - [http://localhost/api/v1/number](http://localhost/#4)
- [POST] - [http://localhost/api/v1/number/list](http://localhost/#5)

E a documentação poderá ser vista na URL: http://localhost

Na raiz do repositório tem um arquivo chamado: CurrencyAPI.json, trata-se da Collection do Postman que pode ser importada para utilizar a API.

## DADOS NO BANCO
Para realização dos testes eu creiei migrations com as seguintes moedas

- Códigos: [AED,ANG,BOB,BOV,BRL,CAD,USD]
- Números: [068,124,532,784,840,984,986]


