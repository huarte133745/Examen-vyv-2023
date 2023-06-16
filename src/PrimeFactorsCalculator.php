<?php

namespace Deg540\PHPTestingBoilerplate;

use phpDocumentor\Reflection\Types\Integer;
use function Sodium\add;

class PrimeFactorsCalculator implements NumberProvider
{

    public function __construct()
    {

    }

    public function calculate(): array
    {
        //$number = $this->getNumber();
        $number = 1;
        $factores = [];
        for($i = 2; $i <= $number; $i = $i+1)
        {
            if($number % $i == 0)
            {
                //Añadimos $i al array al ser divisor de $number.
                array_push($factores, $i);
            }
        }

        //El 1 al tener un solo divisor y ser el mismo, no devolvemos porque no contemplamos su caso.

        return $factores;
    }

    public function getNumber(): int
    {
        return 0;
    }
}