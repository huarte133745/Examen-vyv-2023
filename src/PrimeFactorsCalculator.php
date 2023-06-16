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
        for ($i = 2; $i <= $providedNumber; $i = $i + 1) {
            if ($providedNumber % $i == 0) {
                //Añadimos $i al array al ser divisor de $number.
                array_push($this->primeFactors, $i);
            }
        }

        //El 1 al tener un solo divisor y ser el mismo, no devolvemos porque no contemplamos su caso.

        return $this->primeFactors;
    }

    public function isPrime(int $number)
    {
        $divisorNumber = 0;
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) {
                $divisorNumber++;
            }
        }
        if ($divisorNumber > 2) {
            return false;
        }
        return true;
    }
}
