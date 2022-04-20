<?php

namespace App\Tests\Core;

use App\Core\CardGame;
use App\Core\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
  public function testDefaultValues() {
    $jeuDeCartes = new CardGame(CardGame::factory32Cards());
    $game = new Game($jeuDeCartes);
    $this->assertNotNull($game->getCardToGuess());
    $this->assertTrue($game->getWithHelp());
  }
}
