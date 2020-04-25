<?php

declare(strict_types=1);

namespace Tests\unit;

use PHPUnit\Framework\TestCase;
use Src\PrimeFactors;

class PrimeFactorsTest extends TestCase
{
    /**
     * @var PrimeFactors
     */
    private $primeFactors;

    protected function setUp(): void
    {
        $this->primeFactors = new PrimeFactors();
    }

    /**
     * @dataProvider primeFactorsProvider
     */
    public function testAdd(int $n, array $expected, string $comment): void
    {
        $this->assertSame($this->primeFactors->factorsOf($n), $expected, $comment);
    }

    public function primeFactorsProvider(): array
    {
        return [
            [1, [], '1 is empty'],
            [2, [2], '2 is [2]'],
            [3, [3], '3 is [3]'],
            [4, [2, 2], '4 is [2,2]'],
            [5, [5], '5 is [5]'],
            [6, [2, 3], '6 is [2,3]'],
            [7, [7], '5 is [5]'],
            [8, [2, 2, 2], '8 is [2, 2, 2]'],
            [9, [3, 3], '9 is [3, 3]'],
            [
                2 * 2 * 3 * 3 * 5 * 7 * 11 * 11 * 13,
                [2, 2, 3, 3, 5, 7, 11, 11, 13],
                '1981980 is [2, 2, 3, 3, 5, 7, 11, 11, 13]',
            ],
        ];
    }
}
