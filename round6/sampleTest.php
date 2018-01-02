<?php
class BalanceTest extends TestCase {
  public function testExamples() {
    $this->assertEquals("Right", balance("!!", "??"));
    $this->assertEquals("Left", balance("!??", "?!!"));
    $this->assertEquals("Left", balance("!?!!", "?!?"));
    $this->assertEquals("Balance", balance("!!???!????", "??!!?!!!!!!!"));
}