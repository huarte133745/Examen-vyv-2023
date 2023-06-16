<?php

namespace Deg540\PHPTestingBoilerplate;

class PrimeFactorsCalculator
{
    private NumberProvider $numberProvider;
    public function __construct(NumberProvider $numberProvider)
    {
        $this->numberProvider = $numberProvider;
    }

    public function calculate(): array
    {
        $providedNumber = $this->numberProvider->getNumber();
        echo $providedNumber;
        return [];
    }
}
