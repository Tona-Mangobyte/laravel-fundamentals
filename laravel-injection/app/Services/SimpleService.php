<?php

namespace App\Services;

class SimpleService
{
    public function __construct(public readonly UserService $userService)
    {
    }

    public function sayHello() {
        // return "Hello World!";
        return $this->userService->findAll();
    }
}
