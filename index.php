<?php

require_once 'CsvReader.php';
require_once 'InputProcessor.php';
require_once 'SimilarityCalculator.php';

$csvReader = new CsvReader(__DIR__ . '/input.csv');
$input = $csvReader->read();

$processor = new InputProcessor($input);
$sortedInput = $processor->getSortedInput();
$processor->saveSortedInput(__DIR__ . '/sortedInput.json');

$calculator = new SimilarityCalculator($sortedInput[0], $sortedInput[1]);
$similarityScore = $calculator->calculate();

echo $similarityScore . PHP_EOL;

?>