<?php

class CsvReader
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function read(): array
    {
        $handle = fopen($this->filePath, 'r');
        $data = [];

        while (($row = fgetcsv($handle, 1000, ',', '"', '\\')) !== false) {
            $data[] = $row;
        }

        fclose($handle);

        return $data;
    }
}

?>