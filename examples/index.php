<?php
require __DIR__ . '/../vendor/autoload.php';

use App\DataCalculator;

$fakeData = json_decode(file_get_contents(__DIR__ . '/../data.json'), true);

echo "id\tcost\trevenue\tsellPrice" . PHP_EOL;
foreach ($fakeData as $data) {
    echo $data['id'] . "\t" . $data['cost'] . "\t" . $data['revenue'] . "\t" . $data['sellPrice'] . PHP_EOL;
}

$dataCalcular = new DataCalculator($fakeData);
print_r($dataCalcular->itemSumByColumnAndNum($argv[1], $argv[2]));


