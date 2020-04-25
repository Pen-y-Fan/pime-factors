<?php

declare(strict_types=1);

namespace Src;

class PrimeFactors
{
    public function factorsOf(int $remainder): array
    {
        $factors = [];
        $divisor = 2;
        while ($remainder > 1) {
            while ($remainder % $divisor === 0) {
                $factors[] = $divisor;
                $remainder /= $divisor;
            }
            $divisor++;
        }
        return $factors;
    }
}
