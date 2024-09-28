# Projeto PHP com MySQL usando Docker

Este é um projeto básico em PHP que utiliza MySQL como banco de dados, configurado para ser executado em um ambiente Docker.

## Pré-requisitos

Antes de começar, você precisará ter o seguinte instalando em sua máquina:

- [Docker](https://docs.docker.com/get-docker)
- [Docker Compose](https://docs.docker.com/compose/install)

### Descrição dos Arquivos

`docker-compose.yml`: Arquivo de configuração do Docker Compose.
`Dockerfile`: Arquivo para construir a imagem do PHP com as extensões necessárias.
`src`: Diretório que contém o código fonte da aplicação PHP.

## Instalando o Projeto

1. **Clone o repositório:**

```bash
git clone https://github.com/gustavoalvesdev/php-mysql-docker.git
cd php-mysql-docker
```

2. **Inicie os containers:**

No terminal, execute o seguinte comando para iniciar os containers do Docker:

```bash
docker-compose up --build -d
```
O parâmetro `--build` garante que a imagem do PHP seja reconstruída com as extensões necessárias.

### Acessando a Aplicação

Após iniciar os containers, você pode acessar a aplicação no seu navegador em: `http://localhost:8080`

## Testando a conexão com o Banco de Dados

Você pode criar um arquivo `info.php` dentro da pasta `src` para verificar a configuração do PHP e se a extensão PDO está habilitada:

```php
<?php
phpinfo();
?>
```
Acesse este arquivo em:

`http://localhost:8080/info.php`

### Parando os Containers

Para parar os containers em execução, use o seguinte comando:
```bash
docker-compose down
```

#### Contribuição

Sinta-se à vontade para contribuir com melhorias ou correções. Faça um fork deste repositório e envie um pull request

### Licença
Este Projeto é licenciado sob a [MIT License](LICENSE.md).