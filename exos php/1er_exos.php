

<!-- Version aidé avec Blackbox pour travailler les foreach -->

<?php
$nombre1 = 5;
$nombre2 = 3;
$total = $nombre1 + $nombre2;
echo "nombre1 +nombre2 = total . ";

function checkeven($nombre) {
    if ($nombre % 2 == 0) {
        echo "nombre est pair";
    } else {
        echo "nombre est impair";
    }
}

$a = 3;
$b = 3.2;
$c = "Hello";
$d = array();
$e = array("red", "green", "blue");
$f = NULL;
$g = false;

$PourVerif = array( $a, $b, $c, $d, $e, $f, $g);

function verifType($index) {
    if (is_null($index)) {
        echo "null";
    }
    echo gettype($index) . "<br>";
}

// Boucle basique pour parcourir
foreach ($PourVerif as $value) {
    verifType($value);
}
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;

$Mesnotes = array($note_maths, $note_francais, $note_histoire_geo);

function moyenne($notes) {
    $somme = 0;
    foreach ($notes as $note) {
        $somme += $note;
    }
    return $somme / count($notes);
}

echo "Mes notes sont : La moyenne des notes est " . moyenne($Mesnotes) . "<br>";

$ma_chaine = "Holoulos";
$motif = "lo";
$sans_dernier_motif = substr($ma_chaine, 0, strrpos($ma_chaine, $motif));
echo "Le motif du ma_chaine que l'on veut afficher est :" . $sans_dernier_motif . "<br>";



