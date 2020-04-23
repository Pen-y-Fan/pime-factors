<?php

declare(strict_types=1);

namespace Tests\unit;

use PHPUnit\Framework\TestCase;
use Src\Config;

class SampleTest extends TestCase
{
    public function testBaseConfig(): void
    {
        $this->assertTrue(true);
    }

    public function testConfig(): void
    {
        $this->assertTrue((new Config())->isConfig());
    }
}
