<?php
namespace App;

class DataCalculator
{
    private $data = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @param $column
     * @param $itemNum
     */
    public function itemSumByColumnAndNum($column, $itemNum)
    {
        // filter data by column
        $dataFilterByColumn = array_column($this->data, $column, 'id');

        // group the data by number
        $dataGroup = array_chunk($dataFilterByColumn, $itemNum);

        foreach ($dataGroup as $data) {
            $result[] = array_sum($data);
        }
        return $result;
    }
}