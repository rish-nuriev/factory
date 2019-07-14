<?php

namespace Factory;

class WinterTshirt implements AbstractTshirt
{
    private $color = 'Black';

    public function about()
    {
        echo 'Winter T-shirt with color: ' . $this->getColor();
    }

    public function setColor(string $color)
    {
        return $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}
