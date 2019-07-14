<?php

namespace Factory;

class WinterShorts implements AbstractShorts
{
    public $color = 'Black';

    public function about()
    {
        echo 'Winter Shorts with color: ' . $this->getColor();
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