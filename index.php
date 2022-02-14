<?php
spl_autoload_register(function($className) {
    include './classes/' . $className . '.php';
});

/*$filename = "./files/corbeau.txt";
$handle = fopen($filename, "r");
// filesize() renvoie la longueur du fichier
$contents = fread($handle, 1);
fclose($handle);

var_dump($contents);
*/

$test = new File("./files/corbeau.txt", "r");
var_dump($test->lecture());
