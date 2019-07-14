<?php

namespace Factory;

interface AbstractTshirt
{
    public function about();
    public function setColor(string $color);
    public function getColor();
}