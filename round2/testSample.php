<?php

class PreFizzTest extends TestCase {
  public function testExamples() {
    $this->assertEquals([1], pre_fizz(1));
    $this->assertEquals([1, 2], pre_fizz(2));
    $this->assertEquals([1, 2, 3], pre_fizz(3));
    $this->assertEquals([1, 2, 3, 4], pre_fizz(4));
    $this->assertEquals([1, 2, 3, 4, 5], pre_fizz(5));
  }
}