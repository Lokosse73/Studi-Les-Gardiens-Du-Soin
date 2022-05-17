<?php
class Player{
    public $Number;

    public function __construct(int $Number)
  {
    $this->Number = $Number;
  }

  public function load(): void
  {
    echo
    "<div class='Player'>
      <h2 id='Player".$this->Number."' >PLAYER ".$this->Number."</h2>
      <p class='GlobalNumber' id='Global".$this->Number."'>0</p>
      <div class='CurrentDiv'>
        <p>CURRENT</p>
        <p class='RoundNumber' id='Round".$this->Number."'>0</p>
      </div>
    </div>";
  }
}