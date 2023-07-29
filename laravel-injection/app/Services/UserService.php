<?php

namespace App\Services;

use Illuminate\Http\Request;

class UserService
{
    protected $simpleService;
    public function __construct(
        private readonly SimpleAppService $appService,
    )
    {
        // $this->simpleService = app(SimpleService::class)->get(SimpleService::class);
        // $this->simpleService = $appService->container->get(SimpleService::class);
    }

    public function findAll() {
        // return "Get all users";
        /*$simpleService = $this->appService->container->get(SimpleService::class);
        return $simpleService->say();*/
        return app(SimpleService::class)->say();
    }

    public function invoice(Request $request, $id):array {
        return [
            'var_id' => $id,
            'id' => $request->get('id'),
            'name' => 'Tona'];
    }
}
