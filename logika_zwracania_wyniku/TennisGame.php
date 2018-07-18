<?php
class TennisGame{
    function __construct($player1="Marc", $player2="Jacob"){
        require_once 'Player.php';
$this->player1 = new Player ($player1);
$this->player2 = new Player ($player2);
$this->player1->earnPoints(4);
$this->player2->earnPoints(0);

$this->score();
    }
    public function score(){
        $scoreP1=$this->player1->getPoints();
        $scoreP2=$this->player2->getPoints();
        $score = "Love";
        if($scoreP1>=4||$scoreP2>=4)
        
        {
            if($scoreP1==4||$scoreP2)
                {
                    $player = "player1";
                    if($scoreP2>$scoreP1)
                    $player = "player2";
                    $score= "Winner:".$this->$player->getName();
                }
                if(($scoreP1<4&&$scoreP2>4)||($scoreP2<4&&$scoreP1>4)&&($scoreP1>=$scoreP2+3||$scoreP2>=$scoreP1+3)){
                    $score= "this score is unable to be reached in tennis game";
                }
                if($scoreP1>=4&&$scoreP2>=4&&($scoreP1>=$scoreP2+3||$scoreP2>=$scoreP1+3)){
                    $score= "this score is unable to be reached in tennis game";
                }
               
                if($scoreP1==$scoreP2+2||$scoreP2==$scoreP1+2)
                {
                    $player = "player1";
                    if($scoreP2>$scoreP1)
                    $player = "player2";
                    $score= "Winner:".$this->$player->getName();
                }
                if($scoreP1==$scoreP2+1||$scoreP2==$scoreP1+1)
                {
                    $player = "player1";
                    if($scoreP2>$scoreP1)
                    $player = "player2";
                    $score= "Adventage:".$this->$player->getName();
                }

                if($scoreP1==$scoreP2)
                {
                    $score= "Deuce";
                }

            
        }
        if($scoreP1<4){
            $scoreCount = null;
            if($scoreP1==1||$scoreP2==1)
            $scoreCount = "Fifteen-";
            if($scoreP1==2||$scoreP2==2)
            $scoreCount = "Thirty-";
            if($scoreP1==3||$scoreP2==3)
            $scoreCount = "Forty-";

                if($scoreP1==$scoreP2&&$scoreP1!=0)
                {
                    $score= $scoreCount."All";
                }
                if(($scoreP1==0||$scoreP2==0)){
                    $score= $scoreCount."Love";
                }
        }


       echo $score;
    }
    
}
