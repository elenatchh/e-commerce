<?php
require_once 'database.php'; // Connexion à la base de données
require_once 'function.php'; // Fonctions utiles

session_start(); // On démarre la session

$erreur = ''; // Variable qui contiendra les messages d'erreur
$validation = ''; 

define("URL","http://localhost/konexio/php/11-projet/"); // Constante qui contient l'URL du site

define("RACINE_SITE",$_SERVER['DOCUMENT_ROOT'] ."/konexio/php/11-projet/"); // Constante qui contient le chemin du site