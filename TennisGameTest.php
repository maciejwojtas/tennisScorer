<?php

class TennisGameTest extends PHPUnit_Framework_TestCase
{
    public function test_scores_a_0_0_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(0);
        $tennisGame->player2->earnPoints(0);
        
        $expected = "Love";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_1_0_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(1);
        $tennisGame->player2->earnPoints(0);
        
        $expected = "Fifteen-Love";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_2_0_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(2);
        $tennisGame->player2->earnPoints(0);
        
        $expected = "Thirty-Love";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_3_0_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(3);
        $tennisGame->player2->earnPoints(0);
        
        $expected = "Forty-Love";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_4_0_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(4);
        $tennisGame->player2->earnPoints(0);
        
        $expected = "Winner:Marc";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_4_3_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(4);
        $tennisGame->player2->earnPoints(3);
        
        $expected = "Adventage:Marc";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_4_4_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(4);
        $tennisGame->player2->earnPoints(4);
        
        $expected = "Deuce";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_3_3_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(3);
        $tennisGame->player2->earnPoints(3);
        
        $expected = "Forty-All";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_2_2_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(2);
        $tennisGame->player2->earnPoints(2);
        
        $expected = "Thirty-All";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_1_1_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(1);
        $tennisGame->player2->earnPoints(1);
        
        $expected = "Fifteen-All";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_5_5_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(5);
        $tennisGame->player2->earnPoints(5);
        
        $expected = "Deuce";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_5_6_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(5);
        $tennisGame->player2->earnPoints(6);
        
        $expected = "Adventage:Jacob";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_7_6_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(7);
        $tennisGame->player2->earnPoints(6);
        
        $expected = "Adventage:Marc";

        $this->assertEquals($expected, $tennisGame->score());
    }
    public function test_scores_a_5_7_game(){
    
        $tennisGame = new \Controllers\Core\Web\TennisGame();
        $tennisGame->player1->earnPoints(5);
        $tennisGame->player2->earnPoints(7);
        
        $expected = "Winner:Jacob";

        $this->assertEquals($expected, $tennisGame->score());
    }

}