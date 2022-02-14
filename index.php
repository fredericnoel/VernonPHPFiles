<?php
spl_autoload_register(function($className) {
    include './classes/' . $className . '.php';
});

$filename = "./files/corbeau.txt";
$handle = fopen($filename, "rb");

while(!feof($handle)) {
    $ligne = fgets($handle);
    echo "Ligne : " . $ligne . "<br />";
}

fclose($handle);
