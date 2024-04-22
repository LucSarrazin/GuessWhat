<?php

namespace App\Tests\Core;

use App\Core\CardGame;
use PHPUnit\Framework\TestCase;
use App\Core\Card;

class CardTest extends TestCase
{


  public function testName()
  {
    $card = new Card('As', 'Trefle');
    $this->assertEquals('As', $card->getName());

    $card = new Card('2', 'Trefle');
    $this->assertEquals('2', $card->getName());
  }

  public function testColor()
  {
    $card = new Card('As', 'Trefle');
    $this->assertEquals('Trefle', $card->getColor());

    $card = new Card('As', 'Pique');
    $this->assertEquals('Pique', $card->getColor());
  }

  public function testCompareSameCard()
  {
    $card1 = new Card('As', 'Trefle');
    $card2 = new Card('As', 'Trefle');
    $this->assertEquals(0, CardGame::compare($card1,$card2));
  }

  public function testCompareSameNameNoSameColor()
  {
      $card1 = new Card('As', 'Trefle');
      $card2 = new Card('As', 'Coeur');

      $this->assertEquals(1, CardGame::compare($card2,$card1));
      $this->assertEquals(-1, CardGame::compare($card1,$card2));

  }

  public function testCompareNoSameNameSameColor()
  {
      $card1 = new Card('2', 'Coeur');
      $card2 = new Card('Dix', 'Coeur');

      $this->assertEquals(1, CardGame::compare($card2,$card1));
      $this->assertEquals(-1, CardGame::compare($card2,$card1));
  }

  public function testCompareNoSameNameNoSameColor()
  {
      $card1 = new Card('Dix', 'Pique');
      $card2 = new Card('Roi', 'Coeur');

      $this->assertEquals(1, CardGame::compare($card1,$card2));
      $this->assertEquals(-1, CardGame::compare($card2,$card1));
  }

  public function testToString()
  {
      $card = new Card('Dix', 'Trefle');

      $this->assertEquals('Dix de Trefle', $card->__toString());
  }
}