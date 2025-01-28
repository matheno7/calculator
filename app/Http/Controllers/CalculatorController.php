<?php

namespace App\Http\Controllers;

use App\Services\Calculator\CalculatorContext;
use App\Services\Calculator\Operations\Addition;
use App\Services\Calculator\Operations\Subtraction;
use App\Services\Calculator\Operations\Multiplication;
use App\Services\Calculator\Operations\Division;
use Illuminate\Http\Request;


class CalculatorController extends Controller
{
    public function index(){

        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
            'operation' => 'required|in:add,subtract,multiply,divide',
        ]);

        $number1 = $validated['number1'];
        $number2 = $validated['number2'];
        $operation = $validated['operation'];

        $calculator = new CalculatorContext();

        switch ($operation) {
            case 'add':
                $calculator->setOperation(new Addition());
                break;
            case 'subtract':
                $calculator->setOperation(new Subtraction());
                break;
            case 'multiply':
                $calculator->setOperation(new Multiplication());
                break;
            case 'divide':
                $calculator->setOperation(new Division());
                break;
        }

        $result = $calculator->execute($number1, $number2);

        return back()->with('result', $result);
    }




}
