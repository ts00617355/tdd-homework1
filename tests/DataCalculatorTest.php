<?php

use App\DataCalculator;

class DataCalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testItemSumByColumnAndNum_column_revenue_per_4() {
        // arrange
        $fakeData = json_decode(file_get_contents(__DIR__ . '/../data.json'), true);
        $column = 'revenue';
        $itemNum = 4;
        $dataCalculator = new DataCalculator($fakeData);

        $expected = [50, 66, 60];

        // act
        $result = $dataCalculator->ItemSumByColumnAndNum($column, $itemNum);

        // assert
        $this->assertEquals($expected, $result);
    }

    public function testItemSumByColumnAndNum_column_cost_per_3() {
        // arrange
        $fakeData = json_decode(file_get_contents(__DIR__ . '/../data.json'), true);
        $column = 'cost';
        $itemNum = 3;
        $dataCalculator = new DataCalculator($fakeData);

        $expected = [6, 15, 24, 21];

        // act
        $result = $dataCalculator->ItemSumByColumnAndNum($column, $itemNum);

        // assert
        $this->assertEquals($expected, $result);
    }
}
