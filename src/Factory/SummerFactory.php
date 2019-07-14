<?php

namespace Factory;

class SummerFactory implements FactoryInterface
{
    public function createTshirt(): AbstractTshirt
    {
        return new SummerTshirt();
    }

    public function createShorts(): AbstractShorts
    {
        return new SummerShorts();
    }
}