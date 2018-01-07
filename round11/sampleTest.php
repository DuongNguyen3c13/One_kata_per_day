<?php
class RemoveCharTest extends TestCase {
  public function testFixed() {
    $this->assertEquals('loquen', remove_char('eloquent'));
    $this->assertEquals('ountr', remove_char('country'));
    $this->assertEquals('erso', remove_char('person'));
    $this->assertEquals('lac', remove_char('place'));
  }
}