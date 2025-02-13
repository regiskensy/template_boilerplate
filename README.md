# Adianti Framework v8.0.0 Boilerplate

Boilerplate para projetos baseados no Adianti Framework v8.0.0, utilizando uma stack Docker moderna e otimizada com todas as configurações necessárias para o ambiente desenvolvimento e produção.

## Stack Docker

- **PostgreSQL**: SGBD open source, robusto e performático.
- **pgAdmin4**: Ferramenta de administração de banco de dados PostgreSQL.
- **PHP-FPM 8.3**: Gerenciador de processos PHP com suporte a PHP 8.3.
- **NGINX**: Servidor web leve e de alta performance, com excelente gerenciamento de processos concorrentes e arquivos estáticos.

## Ambiente de Desenvolvimento

### Pré-requisitos
- Docker
- Docker Compose
- Git

### Configuração

1. Clone o repositório
2. Copie `.env.dist` para `.env`
3. Configure as variáveis de ambiente no `.env`:

A configuração do arquivo `.env` é indispensável, não apenas para o funcionamento da aplicação, mas também para o funcionamento dos containers e ferramentas utilizadas.

*As variáveis são injetadas automaticamente nos containers via Docker Compose e disponibilizadas na aplicação através do `getenv()`.*

### Controle da stack

Para iniciar a stack, execute o comando:

```bash
docker compose up -d
```

Para parar a stack, execute o comando:

```bash
docker compose down
```

### Acesso

- Acesso a aplicação: [http://localhost:8080](http://localhost:8080)
- Acesso ao pgAdmin: [http://localhost:5050](http://localhost:5050)

### Migrations e Seeders

O template originalmente utiliza banco de dados SQLite para tabelas de sistema, mas esse boilerplate propõe a utilização do Postgres.
Para criação das tabelas de sistema e inserção dos dados iniciais no Postgres foi instalado via Composer o [Phinx](https://phinx.org/), que é um framework de migrations para PHP.

Para executar as migrations e seeders, siga os passos abaixo:

1. Executar as migrations:

```bash
docker exec SEUPROJETO_php vendor/bin/phinx migrate
```
*Esse comando executa o phinx dentro do container php que processa as migrations localizadas no diretório public/app/database/migrations para criação das tabelas de sistema.*

2. Executar os seeders:

```bash
docker exec SEUPROJETO_php vendor/bin/phinx seed:run
```
*Esse comando executa o phinx dentro do container php que processa os seeders localizados no diretório public/app/database/seeds para inserção dos dados iniciais.*

Verifique a documentação do Phinx para mais informações sobre como criar novas migrations e seeders.
___

Dúvidas:

- E-mail: [regiskensy@gmail.com](mailto:regiskensy@gmail.com)
- Telegram: [@regiskensy](https://t.me/regiskensy)