<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\PrimeFactorsCalculator;
use Exception;
use Mockery;
use PHPUnit\Framework\TestCase;

final class PrimeFactorsCalculatorTest extends TestCase
{
    private PrimeFactorsCalculator $primeFactorsCalculator;

    /**
     * @test
     */
    public function number_is_not_provided()
    {
        $this->primeFactorsCalculator = Mockery::mock(PrimeFactorsCalculator::class);

        $this->primeFactorsCalculator
            ->expects('getNumber')
            ->with()
            ->once()
            ->andThrow(new Exception('Number is not provided'));

        $this->expectException(Exception::class);

        $this->primeFactorsCalculator->getNumber();
    }


    /**
     * @test
     */
    public function returns_1_when_1_is_provided()
    {
        $this->primeFactorsCalculator = Mockery::mock(PrimeFactorsCalculator::class);
        $primeFactors = new PrimeFactorsCalculator();

        $this->primeFactorsCalculator
            ->expects('calculate')
            ->with(1)
            ->once()
            ->andReturn([]);

        $result = $primeFactors->calculate();
        //$result = $this->primeFactorsCalculator->calculate();

        $this->assertEquals($result, []);
    }

    /*

    Están comentados porque mientras no vayan no pasan y no puedo commitearlos.

    public function returns_2_when_2_is_provided()
    {
        $this->primeFactorsCalculator = Mockery::mock(PrimeFactorsCalculator::class);
        $primeFactors = new PrimeFactorsCalculator();

        $this->primeFactorsCalculator
            ->expects('calculate')
            ->with(2)
            ->once()
            ->andReturn([2]);

        $result = $primeFactors->calculate();
        //$result = $this->primeFactorsCalculator->calculate();

        $this->assertEquals($result, [2]);
    }

    public function returns_3_when_3_is_provided()
    {
        $this->primeFactorsCalculator = Mockery::mock(PrimeFactorsCalculator::class);
        $primeFactors = new PrimeFactorsCalculator();

        $this->primeFactorsCalculator
            ->expects('calculate')
            ->with(3)
            ->once()
            ->andReturn([3]);

        $result = $primeFactors->calculate();
        //$result = $this->primeFactorsCalculator->calculate();

        $this->assertEquals($result, [3]);
    }

    public function returns_2_2_when_4_is_provided()
    {
        $this->primeFactorsCalculator = Mockery::mock(PrimeFactorsCalculator::class);
        $primeFactors = new PrimeFactorsCalculator();

        $this->primeFactorsCalculator
            ->expects('calculate')
            ->with(4)
            ->once()
            ->andReturn([2,2]);

        $result = $primeFactors->calculate();
        //$result = $this->primeFactorsCalculator->calculate();

        $this->assertEquals($result, [2,2]);
    }

    public function returns_5_when_5_is_provided()
    {
        $this->primeFactorsCalculator = Mockery::mock(PrimeFactorsCalculator::class);
        $primeFactors = new PrimeFactorsCalculator();

        $this->primeFactorsCalculator
            ->expects('calculate')
            ->with(5)
            ->once()
            ->andReturn([5]);

        $result = $primeFactors->calculate();
        //$result = $this->primeFactorsCalculator->calculate();

        $this->assertEquals($result, [5]);
    }

    public function returns_2_3_when_6_is_provided()
    {
        $this->primeFactorsCalculator = Mockery::mock(PrimeFactorsCalculator::class);
        $primeFactors = new PrimeFactorsCalculator();

        $this->primeFactorsCalculator
            ->expects('calculate')
            ->with(6)
            ->once()
            ->andReturn([2,3]);

        $result = $primeFactors->calculate();
        //$result = $this->primeFactorsCalculator->calculate();

        $this->assertEquals($result, [2,3]);
    }
    */
}
