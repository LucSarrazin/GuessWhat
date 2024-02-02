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
    $this->fail("not implemented !");
  }

  public function testCompareNoSameNameSameColor()
  {
    $this->fail("not implemented !");
  }

  public function testCompareNoSameNameNoSameColor()
  {
    $this->fail("not implemented !");
  }

  public function testToString()
  {
    // vérifie que la représentation textuelle d'une carte
    //  est conforme à ce que vous attendez (methode __toString() de Card)
    $this->fail("not implemented !");
  }

}
