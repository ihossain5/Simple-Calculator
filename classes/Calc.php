<?php


class Calc
{
    public $operator;
    public $num1;
    public $num2;

    public function __construct($operator, $num1, $num2)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculator(){
        switch ($this->operator){
            case 'addition':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'subtraction':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'division':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            case 'multiplication':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            default:
                echo "Error";
                break;
        }
    }
}