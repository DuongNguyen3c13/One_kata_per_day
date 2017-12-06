<?php

class rpcTestCases extends TestCase {
  private function dotest($p1, $p2, $exp) {
        $actual = rpc ($p1, $p2);
        //echo $exp == $actual;
        $this->assertEquals($exp, $actual);
    }
    
    public function testrpcBasics() {
        $this->dotest("rock", "scissors", "Player 1 won!");
        $this->dotest("scissors", "rock", "Player 2 won!");
        $this->dotest("scissors", "scissors", "Draw!");
    }
}