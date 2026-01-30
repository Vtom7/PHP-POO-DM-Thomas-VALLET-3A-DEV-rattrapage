<?php

class CsvInput
{
    private array $left;
    private array $right;

    public function __construct(array $left, array $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function getLeft(): array
    {
        return $this->left;
    }

    public function getRight(): array
    {
        return $this->right;
    }
}

?>