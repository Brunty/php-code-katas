<?php

class RaindropTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     * @dataProvider rainMaker
     *
     * @param $number
     * @param $expectedResult
     */
    function it_correctly_calculates_raindrop_numbers($number, $expectedResult) {
        $raindrop = new Raindrop;
        $this->assertEquals($expectedResult, $raindrop->sound($number));
    }

    function rainMaker() {
        return [
            [1, "1"],
            [3, "Pling"],
            [5, "Plang"],
            [7, "Plong"],
            [6, "Pling"],
            [9, "Pling"],
            [10, "Plang"],
            [14, "Plong"],
            [15, "PlingPlang"],
            [21, "PlingPlong"],
            [25, "Plang"],
            [35, "PlangPlong"],
            [49, "Plong"],
            [52, "52"],
            [105, "PlingPlangPlong"],
            [12121, "12121"],
        ];
    }
}
