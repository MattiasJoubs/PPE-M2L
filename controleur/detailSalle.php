<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.salle.inc.php";

// recuperation des donnees GET, POST, et SESSION
$idS = $_GET["nSalle"];
$listeDetail = afficherSalle();
$listeDetailPoste = afficherPoste();

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "detail d'un restaurant";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueDetailSalle.php";
include "$racine/vue/pied.html.php";
?>