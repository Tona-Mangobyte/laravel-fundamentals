<?php

namespace App\Services;

class UserService
{
    public function __construct(
        private readonly SimpleAppService $appService,
    )
    {
    }

    public function findAll() {
        $simpleService = $this->appService->container->get(SimpleService::class);
        // return "Get all users";
        return $simpleService->say();
    }

    public function invoice():array {
        return ['id' => 1, 'name' => 'Tona'];
    }
}
