<?php

namespace App\Tests\Core;

use App\Core\Card;
use App\Core\CardGame;
use PHPUnit\Framework\TestCase;

class CardGameTest extends TestCase
{

  public function testToString2Cards()
  {
    $jeudecartes = new CardGame([new Card('As', 'Pique'), new Card('Roi', 'Coeur')]);
    $this->assertEquals('CardGame : 2 carte(s)',$jeudecartes->__toString());
  }

  public function testToString1Card()
  {
    $cardGame = new CardGame([new Card('As', 'Pique')]);
    $this->assertEquals('CardGame : 1 carte(s)',$cardGame->__toString());
  }

  public function testCompare()
  {
    $this->fail("not implemented !");
  }

  public function testShuffle()
  {
    $this->fail("not implemented !");
  }

  public function testGetCard()
  {
    $this->fail("not implemented !");
  }

  public function testFactoryCardGame32()
  {
    $this->fail("not implemented !");
  }

}
