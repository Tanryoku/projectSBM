<?php

// Fonction pour calculer la taille d'une chaine de caractère
function tesLongComment($chaine){
    $longComment = strlen($chaine);
    echo "Hé $chaine, t'es long comme ça: $longComment ! <br>";
}

// Fonction pour vérifier si une chaine dépasse 100 caractères
function tesTropLong($chaine){
    $tropLong = 100; // On fixe un nombre de caractères maximum
    if(strlen($chaine) > $tropLong){
        echo "Wesh $chaine té grav tro lon";
        // dans une vraie fonction, on voudrait probablement faire un break ici, ou un return 0;
    }
    else{
        echo "tes ok $chaine.<br>";
        // La condition est ok, on continue le programme
    }
}

// Fonction pour chercher un caractère dans une chaine
function ilyAi($chaine, $jecherche){
    $position =  strpos($chaine, $jecherche);
    if( $position === false ) {
      echo "$jecherche y est pa !<br>" ;
      }else{
          echo "$jecherche y est <br>";
      }
}
// fonction pour chercher une chaine dans un tableau
function tesLa($jeCherche, $table){
    $position = array_search($jeCherche, $table);
        if($position === false){
            echo "le mo y et pa";
        } else {
            echo "le mo y es la $position <br>";
        }
}

// Fonction pour separer la fin d'une chaine à partir d'un nombre défini
function cKoiCLettres($nombre, $chaine){
    $resultat = substr($chaine, 0, $nombre);
    echo "c sa la fin : $resultat<br>";
}

// fonction pour transformer une chaine en tableau
function devienTableau($chaine){
    $tableau = str_split($chaine);
    echo "mon tableau c " . print_r($tableau, true) . "<br>";
    // echo ne peut pas afficher la valeur convertie en tableau, d'ou le print_r
}


// fonction pour comparer l'arrivée en ordre alphabétique de deux chaînes
function jeCompare($chaine1, $chaine2){
    if(strcmp($chaine1, $chaine2) == 1)
        echo " $chaine1 vient alphabétiquement après $chaine2<br>";
    elseif (strcmp($chaine1, $chaine2) == -1)
        echo "$chaine1 vient alphabétiquement avant $chaine2 <br>";
    else 
        echo "y son pareils $chaine1 et $chaine2<br>";
}
?>
