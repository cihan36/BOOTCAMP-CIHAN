<?php
class MyAttributes
{

    private $a;
    private $b;


    public function setA($a)
    {

        $this->a = $a;


    }


    public function setB($b)
    {


        $this->b = $b;


    }

    public function getA()
    {

        return $this->a;


    }
    public function getB()
    {
        return $this->b;

    }



    function display()
    {


        echo $this->a . ' ' . $this->b;

    }


}

?>