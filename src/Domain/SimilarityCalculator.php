<?php

class SimilarityCalculator
{
    private array $left;
    private array $right;

    public function __construct(array $left, array $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function calculate(): int
    {
        $multipliers = [];

        foreach ($this->left as $value) {
            $multipliers[$value] = 0;
        }

        foreach ($this->right as $value) {
            if (array_key_exists($value, $multipliers)) {
                $multipliers[$value]++;
            }
        }

        $score = 0;
        foreach ($multipliers as $value => $multiplier) {
            $score += $value * $multiplier;
        }

        return $score;
    }
}

?>