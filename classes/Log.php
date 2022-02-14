<?php

class Log
{
    public static $path = "./logs/erreur.txt";

    public static function write($error)
    {
        $fichier = fopen(self::$path, 'c+b');
        fwrite($fichier, "\n$error");
        fclose($fichier);
    }
}
