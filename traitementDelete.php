<?php

require_once("connexion.php");

$id=$_GET["id"];

$tache="DELETE FROM fournitures WHERE id = $id";

$bdd->exec($tache);

header('Location: Index.php');