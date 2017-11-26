<?php

class ProductTest extends TestCase {
  public function testFixed() {
    $this->assertEquals(0, product(""));
    $this->assertEquals(0, product("!"));
    $this->assertEquals(0, product("!!"));
    $this->assertEquals(2, product("!??"));
    $this->assertEquals(3, product("!???"));
    $this->assertEquals(6, product("!!!??"));
    $this->assertEquals(9, product("!!!???"));
    $this->assertEquals(9, product("!???!!"));
    $this->assertEquals(20, product("!????!!!?"));
  }
}