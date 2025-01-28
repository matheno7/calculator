<?php

namespace App\Services\Calculator\Contracts;

interface OperationInterface
{
    public function calculate(float $number1, float $number2): float|string;
}
