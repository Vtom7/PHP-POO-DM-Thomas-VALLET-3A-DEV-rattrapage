<?php

class InputSorter
{
    public function sort(CsvInput $input): CsvInput
    {
        $left = $input->getLeft();
        $right = $input->getRight();

        sort($left);
        sort($right);

        return new CsvInput($left, $right);
    }
}

?>