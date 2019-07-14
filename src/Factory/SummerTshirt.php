<?php

namespace Factory;

class SummerTshirt implements AbstractTshirt
{
    private $color = 'White';

    public function about()
    {
        echo 'Summer T-shirt with color: ' . $this->getColor();
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
