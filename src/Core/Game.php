<?php

namespace App\Core;

/**
 * Class Game : la logique du jeu.
 * @package App\Core
 */
class Game
{
  /**
   * @var CardGame un jeu de cartes
   */
  private $cardGame;

  /**
   * @var Card c'est la carte à deviner par le joueur
   */
  private $cardToGuess;

  /**
   * @var bool pour prendre en compte la présence d'une aide au cours d'une partie
   */
  private $withHelp;

  /**
   * Game constructor.
   * @param CardGame $cardGame
   * @param Card $cardToGuess
   * @param bool $withHelp
   */
  public function __construct(CardGame $cardGame, $cardToGuess = null, bool $withHelp = true)
  {
    // TODO si $cardGame est null, affecter alors un jeu de 32 par défaut
    $this->cardGame = $cardGame;

    if ($cardToGuess) {
      $this->cardToGuess = $cardToGuess;
    }  else {
      // TODO : tirer aléatoirement une carte du jeu de cartes
      //  dans cette version on prend la première carte,
      //  en espérant qu'il y en ait au moins une dans le jeu
      $this->cardToGuess = $this->cardGame->getCard(0);
    }

    $this->withHelp = $withHelp;
  }

  public function getWithHelp()
  {
     return $this->withHelp;
  }

  /**
   * @param Card $card une soumission du joueur
   * @return bool true si la carte proposée est la bonne, false sinon
   */
  public function isMatch(Card $card)
  {
    return CardGame::compare($card, $this->cardToGuess) === 0;
  }

  /**
   * À appeler en fin de partie.
   * @return string des infos sur la stratégie du joueur
   */
  public function getStatistics(): string
  {
    return "TODO : gestStatistics()";
  }

  /**
   * @return Card
   */
  public function getCardToGuess(): Card
  {
    return $this->cardToGuess;
  }

}

