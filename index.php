<?php
spl_autoload_register(function($className) {
    include './classes/' . $className . '.php';
});

$filename = "./files/corbeau.txt";
$handle = fopen($filename, "rb");

echo "Ligne 1 : " . fgetc($handle) . "<br />";
echo "Ligne 2 : " . fgetc($handle) . "<br />";

fclose($handle);
