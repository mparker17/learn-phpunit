<?php

use \Mpd\BowlingKata\BowlingGame;

class BowlingGameTest extends PHPUnit_Framework_TestCase {
    private $game;

    function setUp() {
        $this->game = new BowlingGame();
    }

    function testBowlAllZeroes() {
        $this->rollMany(20, 0);

        $this->assertSame(0, $this->game->score());
    }

    function testBowlAllOnes() {
        $this->rollMany(20, 1);

        $this->assertSame(20, $this->game->score());
    }

    private function rollMany($how_many, $pins) {
        for ($i = 0; $i < $how_many; $i++) {
            $this->game->roll($pins);
        }
    }
}
