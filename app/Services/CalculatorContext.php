<?php
namespace App\Services;


use App\Services\Calculator\Contracts\OperationInterface;

class CalculatorContext
{
    private OperationInterface $operation;

    public function setOperation(OperationInterface $operation): void
    {
        $this->operation = $operation;
    }

    public function execute(float $number1, float $number2): float|string
    {
        return $this->operation->calculate($number1, $number2);
    }
}
