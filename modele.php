<?php

// partie Modèle du blog
// Renvoie la liste de tous les billets, triés par identifiant décroissant
function getBillets() {
    $bdd = getBDD();

    // TODO
}

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBDD() {
    $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 'root', '');
    return($bdd);
}