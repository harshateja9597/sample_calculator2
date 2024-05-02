<?php

use PHPUnit\Framework\TestCase;

require_once 'Calculator.php';

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calculator = new Calculator();
        $result = $calculator->add(5, 3);
        $this->assertEquals(8, $result);
    }

    public function testSubtract() {
        $calculator = new Calculator();
        $result = $calculator->subtract(5, 3);
        $this->assertEquals(2, $result);
    }
}
