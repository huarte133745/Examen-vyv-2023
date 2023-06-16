<?php

namespace Deg540\PHPTestingBoilerplate;

class PrimeFactorsCalculator
{
    private NumberProvider $numberProvider;
    private array $primeFactors;
    public function __construct(NumberProvider $numberProvider)
    {
        $this->numberProvider = $numberProvider;
        $this->primeFactors = [];
    }

    public function calculate(): array
    {
        $providedNumber = $this->numberProvider->getNumber();
        $this->primeFactors = [];
        for ($i = 2; $i <= $providedNumber; $i++) {
            while ($providedNumber % $i === 0 and $this->isPrime($i)) {
                array_push($this->primeFactors, $i);
                $providedNumber = $providedNumber / $i;
            }
        }
        return $this->primeFactors;
    }

    public function isPrime(int $number): bool
    {
        $divisorNumber = 0;
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) {
                $divisorNumber++;
            }
        }

        if ($divisorNumber > 2 or $divisorNumber == 0) {
            return false;
        }
        return true;
    }
}
