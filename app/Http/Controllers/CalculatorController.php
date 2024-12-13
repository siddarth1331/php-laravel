<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //Addition
    public function sum($num1,$num2)
    {
    return $num1+$num2;
    }
    //Substraction
    public function sub($num1,$num2)
    {
    return $num1-$num2;
    }
    //Multiplication
    public function mul($num1,$num2)
    {
    return $num1*$num2;
    }
    //Division
    public function div($num1,$num2)
    {
    return $num1/$num2;
    }
}
