<?php

require_once __DIR__ . '/Csv/CsvReader.php';
require_once __DIR__ . '/Service/InputProcessor.php';
require_once __DIR__ . '/Service/JsonExporter.php';
require_once __DIR__ . '/Domain/SimilarityCalculator.php';

class Application
{
    public function run(): void
    {
        $csvPath  = __DIR__ . '/../input.csv';
        $jsonPath = __DIR__ . '/../sortedInput.json';

        $reader = new CsvReader($csvPath);
        $rows = $reader->read();

        $processor = new InputProcessor($rows);
        $sortedInput = $processor->getSortedInput();

        (new JsonExporter())->export($sortedInput, $jsonPath);

        $calculator = new SimilarityCalculator(
            $sortedInput[0],
            $sortedInput[1]
        );

        echo $calculator->calculate() . PHP_EOL;
    }
}

?>