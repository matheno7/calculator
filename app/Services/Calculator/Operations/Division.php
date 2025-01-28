<?php

namespace App\Services\Calculator\Operations;

use App\Services\Calculator\Contracts\OperationInterface;

class Division implements OperationInterface
{
    public function calculate(float $number1, float $number2): float|string
    {
        return $number2 !== 0 ? $number1 / $number2 : 'Error: Division by zero';
    }
}

