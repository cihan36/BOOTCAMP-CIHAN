<?php


class MyTinyCalculator
{

    private $a;
    private $b;
    private $result;

    public function getA()
    {
        return $this->a;
    }
    public function setA($a)
    {

        $this->a = $a;
    }

    public function getB()
    {
        return $this->b;
    }
    public function setB($b)
    {

        $this->b = $b;
    }

    public function getResult()
    {

        return $this->result;

    }

    public function setResult($result)
    {
        $this->result = $result;

    }


    public function showResult()
    {

        return $this->result;


    }

    public function add()
    {
        $this->result = $this->a  + $this->b;
        return $this->result;

    }
    public function substract()
    {

        $this->result = $this->a - $this->b;
        return $this->result;

    }
    public function multiply()
    {
 
    $this->result = $this->a * $this->b;
        return $this->result;

    }
    public function divide()
    {
        $this->result = $this->a / $this->b;
        return $this->result;


    }



}

?>