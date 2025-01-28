<?php


namespace App\Services\Calculator\Operations;

use App\Services\Calculator\Contracts\OperationInterface;

class Subtraction implements OperationInterface
{
    public function calculate(float $number1, float $number2): float
    {
        return $number1 - $number2;
    }
}
