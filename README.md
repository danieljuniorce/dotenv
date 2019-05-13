# Saaiph\Dotenv

## Leitura de do arquivo .env ou outros;
<p>Estrutura do Arquivo .env</p>

```
Criando variavel no arquivo .env
VARIAVEL="ValorDaVariavel"

Comentários no arquivo, usando o "#"
#Comentário aqui
```

### Usando com Composer
<p>Necessário o uso do composer!</p>
> composer require saaiph/dotenv

> Instanciado a classe e lendo o arquivo .env na pasta raiz do projeto.
```php
    use Saaiph\Dotenv\Dotenv;

    $dotenv = new Dotenv(__DIR__."/.env");
    $dotenv->load();
```

### Instância da váriavel globalmente com $_ENV
```php
echo $_ENV['VARIAVEL'];

```