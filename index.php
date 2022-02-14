<?php

$fichier = file('./files/corbeau.txt');

$fable = "<blockquote>";

for($i = 0 ; $i < count($fichier) ; $i++) {
    $fable .= $fichier[$i];
    $fable .= "<br />";
}

$fable .= "</blockquote>";

echo $fable;

echo "<hr />";

// Affiche le fichier avec mise en forme d'origine (retours chariot remplacés par <br />)
echo nl2br(file_get_contents('./files/corbeau.txt'));
