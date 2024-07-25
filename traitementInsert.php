<?php

require_once "connexion.php";

$taches = $_GET["taches"];

$tache = "INSERT INTO fournitures(taches) VALUES ('$taches')";
           
$execution = $bdd->exec($tache);

header('Location: Index.php');