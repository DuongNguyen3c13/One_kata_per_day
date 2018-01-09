<?php
class RemoveTest extends TestCase {
  public function testDescriptionExamples() {
    $this->assertEquals("Hi!", remove("Hi!"));
    $this->assertEquals("Hi!", remove("Hi!!!"));
    $this->assertEquals("Hi!", remove("!Hi"));
    $this->assertEquals("Hi!", remove("!Hi!"));
    $this->assertEquals("Hi Hi!", remove("Hi! Hi!"));
    $this->assertEquals("Hi!", remove("Hi"));
  }
}