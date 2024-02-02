<?php

namespace App\Core;

use phpDocumentor\Reflection\Types\Integer;

/**
 * Class CardGame : un jeu de cartes.
 * @package App\Core
 */
class CardGame
{

   const ORDER_COLORS=['Trefle'=> 1, 'Carreau'=>2, 'Coeur'=>3, 'Pique'=>4 ];


  /**
   * @var $cards array of Cards
   */
  private $cards;

  /**
   * Game constructor.
   * @param array $cards
   */
  public function __construct(array $cards)
  {
    $this->cards = $cards;
  }

  /**
   * Brasse le jeu de cartes
   */
  public function shuffle()
  {
    // TODO (voir les fonctions sur les tableaux)
  }

  // TODO ajouter une méthode reOrder qui remet le paquet en ordre

  /** définir une relation d'ordre entre instance de Card.
   * à valeur égale (name) c'est l'ordre de la couleur qui prime
   * pique > coeur > carreau > trèfle
   * Attention : si AS de Coeur est plus fort que AS de Trèfle,
   * 2 de Coeur sera cependant plus faible que 3 de Trèfle
   *
   *  Remarque : cette méthode n'est pas de portée d'instance (static)
   *
   * @see https://www.php.net/manual/fr/function.usort.php
   *
   * @param $c1 Card
   * @param $c2 Card
   * @return int
   * <ul>
   *  <li> zéro si $c1 et $c2 sont considérés comme égaux </li>
   *  <li> -1 si $c1 est considéré inférieur à $c2</li>
   * <li> +1 si $c1 est considéré supérieur à $c2</li>
   * </ul>
   *
   */
  public static function compare(Card $c1, Card $c2) : int
  {
    // TODO code naïf : il faudrait prendre en compte la relation d'ordre sur la couleur et le nom

    $c1Name = strtolower($c1->getName());
    $c2Name = strtolower($c2->getName());

    if ($c1Name === $c2Name) {
        return 0;
    }

    return ($c1Name > $c2Name) ? +1 : -1;
  }

  /**
   * Création automatique d'un paquet de 32 cartes
   * (afin de simplifier son instanciation)
   * @return array of Cards
   */
  public static function factory32Cards() : array {
     // TODO création d'un jeu de 32 cartes
    $cards = [new Card('As', 'Coeur'), new Card('As', 'Trefle'), new Card('7', 'Trefle')];
    return $cards;
  }

  /** retourne une carte du jeu située à l'index demandé
   *  ou la première carte si l'index n'est pas recevable
   *
   *  @param int l'index de la carte demandée
   *  @return Card la carte à l'index demandé ou première carte du jeu
   */
  public function getCard(int $index) : Card {
    // TODO : prendre en compte les SPECS ci-dessus
    return  $this->cards[$index];
  }

  /**
   * @see https://www.php.net/manual/fr/language.oop5.magic.php#object.tostring
   * @return string
   */
  public function __toString()
  {
    return 'CardGame : '.count($this->cards).' carte(s)';
  }

}

