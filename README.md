# tennisScorer

Gra w tenisa 
Napisałem klasę TennisGame  zawierającą logikę do zwracania wyniku obecnego gema oraz klasę Player - czyli gracza.  
Klasa TennisGame  implementuje następujący interfejs: 
interface TennisInterface { 
    function __construct(Player $player1, Player $player2);   
  /**  
      * Zwraca wynik meczu  
      */     function score():string;
 } 
Wynik jest zwracany w postaci stringu, np. “Deuce”, ‘’Fifteen-Love” itd (szczegóły poniżej) 
Klasa gracza implementuje następujący interfejs: 
interface PlayerInterface { 
    function __construct(string $name, int $points);
    /**     
      * Przypisuje punkty graczowi    
      */  
  function earnPoints(int $points):void;   
      /** 
        * Zwraca imię gracza   
        */ 
   function getName():string;   
        /**
            * Zwraca punkty gracza
            */    function getPoints():int;
 } 
Napisałem testy jednostkowe z wykorzystaniem PHP Unit, które weryﬁkują poprawność działania aplikacji.  
Przykład testu: 
   /** 
        * W przypadku wyniku 8 do 9, gracz drugi ma przewagę
        */ 
   public function test_scores_a_8_9_game()   
 {
    $this->player1->earnPoints(8);    
    $this->player2->earnPoints(9);   
    $this->assertEquals($this->game->score(), 'Advantage: Janina Kowalska');
    } 
Testy weryfikują następujące wyniki (po lewej obecny wynik w liczbach, zwraca wynik w stringu wg formatu który jest po prawej): 
A. 0-0 = Love 
B. 1-0 => Fifteen-Love
 C. 2-0 => Thirty-Love
 D. 3-0 => Forty-Love
 E. 4-0 => Winner: Player Name 
F. 4-3 => Advantage: Player Name 
G. 4-4 => Deuce 
H. 3-3 => Forty-All 
Wykorzystałem Composera. PHP Unit dołączyłem  jako “require-dev” w composer.json 
