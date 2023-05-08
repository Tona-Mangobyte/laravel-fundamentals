<?php

namespace App\Services;

use Illuminate\Http\Request;

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

    public function invoice(Request $request):array {
        return [
            'id' => $request->get('id'),
            'name' => 'Tona'];
    }
}
