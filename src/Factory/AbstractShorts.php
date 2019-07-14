<?php

namespace Factory;

interface AbstractShorts
{
    public function about();
    public function synch(AbstractTshirt $tshirt);
    public function setColor(string $color);
    public function getColor();
}