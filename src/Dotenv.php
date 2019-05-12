<?php
namespace Saaiph\Dotenv;

class Dotenv
{
    private static $file;

    public function __construct($directory)
    {
        self::$file = $directory;
        self::verify();
    }

    public static function load()
    {
        $read =  file(self::$file);

        foreach ($read as $key => $value) {
            if (!strstr($value, "#")) {
                $var = \explode("=", $value);
                
                $_ENV[$var[0]] = $var[1];
            }
        }
    }
    
    private static function verify()
    {
        if (file_exists(self::$file)) {
            return true;
        } else {
            throw new \ErrorException("O Arquivo não foi encontrado ou não existe.");
        }
    }
}
