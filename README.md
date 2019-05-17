<p align="center"><img src="https://user-images.githubusercontent.com/33224319/57905337-95f1a500-784c-11e9-83c2-34c96465f5fd.jpg"></p>
<h1 align="center"> Router </h1>
<p align="center">
    <a href="https://github.com/saaiph/saaiph/releases">
        <img src="https://img.shields.io/badge/Release-v1.0-green.svg">
    </a>
    <a href="http://php.net">
        <img src="https://img.shields.io/badge/PHP-7.1.2-purple.svg">
    </a>
        <a href="https://github.com/saaiph/saaiph/releases">
        <img src="https://img.shields.io/badge/Build-Success-Green.svg">
    </a>
    <a href="https://lbesson.mit-license.org/">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg">
    </a>
</p>

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