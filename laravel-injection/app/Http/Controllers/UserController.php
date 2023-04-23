<?php

namespace App\Http\Controllers;

use App\Services\SimpleService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(private readonly SimpleService $simpleService)
    {}

    public function hello($id) {
        return $this->simpleService->sayHello();
    }
}
