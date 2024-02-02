<?php

require '../../vendor/autoload.php';

$aide = false;

echo "*** Création d'un jeu de 32 cartes.***\n";
$cardGame = new App\Core\CardGame(App\Core\CardGame::factory32Cards());

echo "*** Carte à deviner .***\n";
// en mettant à null, on laisse le choix de la carte à deviner à Game
$secretCard = null; // new \App\Core\Card("As", "Coeur") ;

echo " ==== Instanciation du jeu, début de la partie. ==== \n";
$game =  new App\Core\Game($cardGame, $secretCard, $aide);

$userCardName = readline("Entrez un nom de carte dans le jeu (exemples : Roi, 7, As) : ");
$userCardColor = readline("Entrez une couleur de carte dans le jeu (exemples : Coeur, Trefle, Carreau, Pique) : ");

// echo "len carte name : >" . strlen($userCardName) . "<\n";
$userCard = new \App\Core\Card($userCardName, $userCardColor);

if ($game->isMatch($userCard)) {
  echo "Bravo ! \n";
} else {
  echo "Loupé !\n";
}

echo " ==== Fin prématurée de la partie ====\n";

echo " ==== Analyse de votre stratégie ====\n";
echo " Votre stratégie de jeu : " . $game->getStatistics();

echo "\n*** Terminé ***\n";