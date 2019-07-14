<?php

namespace Factory;

class SummerShorts implements AbstractShorts
{
    public $color = 'White';

    public function about()
    {
        echo 'Summer Shorts with color: ' . $this->getColor();
    }

    public function synch(AbstractTshirt $tshirt)
    {
        $this->setColor($tshirt->getColor());
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}