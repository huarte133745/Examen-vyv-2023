<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\NumberProvider;
use Mockery;
use Deg540\PHPTestingBoilerplate\PrimeFactorsCalculator;
use PHPUnit\Framework\TestCase;

final class PrimeFactorsCalculatorTest extends TestCase
{
    private $mockNumberProvider;

    /**
     * @SuppressWarnings(PHPMD.StaticAccess);
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->mockNumberProvider = Mockery::mock(NumberProvider::class);

        $this->primeFactorsCalculator = new PrimeFactorsCalculator($this->mockNumberProvider);
    }

    /**
     * @SuppressWarnings(PHPMD.StaticAccess);
     */
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    /**
     * @test
     * @SuppressWarnings(PHPMD.StaticAccess);
     */
    public function calculateReturnsEmptyArrayWhen1IsProvided()
    {
        $this->mockNumberProvider
            ->expects('getNumber')
            ->with()
            ->once()
            ->andReturn(1);

        $result = $this->primeFactorsCalculator->Calculate();

        $this->assertEquals([], $result);
    }
}
