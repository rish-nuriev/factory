<?php

namespace Factory;

class WinterFactory implements FactoryInterface
{
    public function createTshirt(): AbstractTshirt
    {
        return new WinterTshirt();
    }

    public function createShorts(): AbstractShorts
    {
        return new WinterShorts();
    }
}