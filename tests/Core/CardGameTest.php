<?php

namespace App\Tests\Core;

use App\Core\Card;
use App\Core\CardGame;
use PHPUnit\Framework\TestCase;

class CardGameTest extends TestCase
{

  public function testToString2Cards()
  {
    $cardGame = new CardGame([new Card('As', 'Pique'), new Card('Roi', 'Coeur')]);
    $this->assertEquals('CardGame : 2 carte(s)',$cardGame->__toString());
  }

  public function testToString1Card()
  {
    $cardGame = new CardGame([new Card('As', 'Pique')]);
    $this->assertEquals('CardGame : 1 carte(s)',$cardGame->__toString());
  }

  public function testCompare()
  {
    $card1 = new Card('As', 'Pique');
    $card2 = new Card('As', 'Pique');
    $cardGame = new CardGame([$card1, $card2]);
    $this->assertEquals(0, $cardGame->compare($card1, $card2));
  }

  public function testShuffle()
  {
    $cardGame = new CardGame(CardGame::factory52Cards());
    $cartesMelangees = $cardGame->shuffle($cardGame->getCards());
    $this->assertEquals($cartesMelangees, $cardGame->shuffle($cardGame->getCards()));
  }

  public function testGetCard()
{
    $cardGame = new CardGame(CardGame::factory52Cards());
    $this->assertEquals('Dix de Trefle', $cardGame->getCard(0));
}
  public function testFactoryCardGame32()
{
  $paquet = CardGame::factory32Cards();
  $this->assertEquals(32, count($paquet));
}

}
