<?php

class CountPositivesSumNegativesTestCases extends TestCase
{
    public function testExample() {
      $this->assertSame([10, -65], countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]));
      $this->assertSame([8, -50], countPositivesSumNegatives([0, 2, 3, 0, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14]));
    }
}