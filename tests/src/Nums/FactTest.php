<?php

namespace Algo\Nums;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2021-04-29 at 23:45:10.
 */
class FactTest extends \PHPUnit\Framework\TestCase {

    /**
     * @var Fact
     */
    private $obj;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void {
        $this->obj = new Fact;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void {

    }

    /**
     * @covers Algo\Nums\Fact::calc
     * @dataProvider calcProvider
     */
    public function testCalc($n, $expected) {
        \PHPUnit\Framework\assertEquals($expected, $this->obj->calc($n));
    }

    /**
     * @covers Algo\Nums\Fact::calc
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Must be positive int
     */
    public function testNegativeException() {
        $this->expectException(\InvalidArgumentException::class);
        $this->obj->calc(-5);
    }

    public function calcProvider() {
        return [
            [ 0, 1 ],
            [ 1, 1 ],
            [ 2, 2 ],
            [ 3, 6 ],
            [ 4, 24 ],
            [ 5, 120 ],
            [ 8, 40320 ],
            [ 11, 39916800 ]
        ];
    }

    /**
     * @covers Algo\Nums\Fact::getLog
     */
    public function testGetLog() {
        $this->obj->calc(5);
        \PHPUnit\Framework\assertCount(4, $this->obj->getLog());
    }

}
