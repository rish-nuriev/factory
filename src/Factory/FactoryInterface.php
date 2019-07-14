<?php

namespace Factory;

interface FactoryInterface
{
    public function createTshirt(): AbstractTshirt;
    public function createShorts(): AbstractShorts;
}