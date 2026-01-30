<?php

class JsonExporter
{
    public function export(array $data, string $path): void
    {
        file_put_contents(
            $path,
            json_encode($data, JSON_PRETTY_PRINT)
        );
    }
}

?>