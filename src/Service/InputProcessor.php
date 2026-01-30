<?php

class InputProcessor
{
    private array $leftList = [];
    private array $rightList = [];

    public function __construct(array $input)
    {
        foreach ($input as $row) {
            $this->leftList[] = $row[0];
            $this->rightList[] = $row[1];
        }
    }

    public function getSortedInput(): array
    {
        sort($this->leftList);
        sort($this->rightList);

        return [$this->leftList, $this->rightList];
    }

    public function saveSortedInput(string $filePath): void
    {
        file_put_contents(
            $filePath,
            json_encode($this->getSortedInput(), JSON_PRETTY_PRINT)
        );
    }
}

?>