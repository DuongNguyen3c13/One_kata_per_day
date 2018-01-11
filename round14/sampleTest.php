<?php

class PlayDigitTestCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {        
        $this->revTest(digPow(89, 1), 1);
        $this->revTest(digPow(92, 1), -1);
        $this->revTest(digPow(46288, 3), 51);
    }
}
