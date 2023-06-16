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
    private $primeCalculator;

    /**
     * @SuppressWarnings(PHPMD.StaticAccess);
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->mockNumberProvider = Mockery::mock(NumberProvider::class);

        $this->primeCalculator = new PrimeFactorsCalculator($this->mockNumberProvider);
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
     */
    public function calculateReturnsEmptyArrayWhen1IsProvided()
    {
        $this->mockNumberProvider
            ->expects('getNumber')
            ->with()
            ->once()
            ->andReturn(1);

        $result = $this->primeCalculator->Calculate();

        $this->assertEquals([], $result);
    }

    /**
     * @test
     */
    public function calculateReturnsPrimeArrayWhen2IsProvided()
    {
        $this->mockNumberProvider
            ->expects('getNumber')
            ->with()
            ->once()
            ->andReturn(2);

        $result = $this->primeCalculator->Calculate();

        $this->assertEquals([2], $result);
    }

    /**
     * @test
     */
    public function calculateReturnsPrimeArrayWhen4IsProvided()
    {
        $this->mockNumberProvider
            ->expects('getNumber')
            ->with()
            ->once()
            ->andReturn(4);

        $result = $this->primeCalculator->Calculate();

        $this->assertEquals([2,2], $result);
    }

    /**
     * @test
     */
    public function calculateReturnsPrimeArrayWhen6IsProvided()
    {
        $this->mockNumberProvider
            ->expects('getNumber')
            ->with()
            ->once()
            ->andReturn(6);

        $result = $this->primeCalculator->Calculate();

        $this->assertEquals([2,3], $result);
    }

    /**
     * @test
     */
    public function calculateReturnsPrimeArrayWhen16IsProvided()
    {
        $this->mockNumberProvider
            ->expects('getNumber')
            ->with()
            ->once()
            ->andReturn(16);

        $result = $this->primeCalculator->Calculate();

        $this->assertEquals([2,2,2,2], $result);
    }

    /**
     * @test
     */
    public function calculateReturnsPrimeArrayWhen23IsProvided()
    {
        $this->mockNumberProvider
            ->expects('getNumber')
            ->with()
            ->once()
            ->andReturn(23);

        $result = $this->primeCalculator->Calculate();

        $this->assertEquals([23], $result);
    }

    /**
     * @test
     */
    public function isPrimeReturnsTrueWhen7IsProvided()
    {
        $result = $this->primeCalculator->isPrime(7);

        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function isPrimeReturnsFalseWhen8IsProvided()
    {
        $result = $this->primeCalculator->isPrime(8);

        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function isPrimeReturnsFalseWhen0IsProvided()
    {
        $result = $this->primeCalculator->isPrime(0);

        $this->assertFalse($result);
    }
}
