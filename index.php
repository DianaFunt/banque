<?php
require('Titulaire.php');
require('Compte.php');



$titulaire = new Titulaire('Stephen', 'King', 35, 'Strasbourg');
$compte1 = new Compte('Livret A', 50, '€', $titulaire);
$compte1 = new Compte('carte blue', 100, '€', $titulaire);


echo $titulaire->afficherComptes(); // afiicher tous les comptes dans le table 'Comptes' 


?>