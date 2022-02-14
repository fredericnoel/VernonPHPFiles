<?php
spl_autoload_register(function($className) {
    include './classes/' . $className . '.php';
});

$fichier = fopen('./files/ecriture.txt', 'c+b');

fwrite($fichier, "Une ligne de commentaire bidon");
fwrite($fichier, "\nUne autre ligne de commentaire bidon");

fclose($fichier);
