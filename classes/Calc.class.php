<?php

class Calc
{
    public $operator;
    public $num1;
    public $num2;


    public function __construct(string $one, int $two, int $three)
    {
        $this->operator = $one;
        $this->num1 = $two;
        $this->num2 = $three;
    }

    public function calculator()
    {
        switch ($this->operator) {
            case 'add':
             
                return $this->num1 + $this->num2;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;

            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;

            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;

            default:
                echo "Error!";
                break;
        }
    }
}
