<?php

namespace App\Services;

use Psr\Container\ContainerInterface;

class SimpleAppService
{
    public function __construct(public readonly ContainerInterface $container)
    {
    }
}
