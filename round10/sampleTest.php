<?php 
class PersistenceTest extends TestCase {
    public function testDescriptionExamples() {
        $this->assertEquals(3, persistence(39));
        $this->assertEquals(4, persistence(999));
        $this->assertEquals(0, persistence(4));
    }
}