<?php

class Log
{
    public static function write($error)
    {
        file_put_contents('./logs/erreur.txt', $error);
    }
}
