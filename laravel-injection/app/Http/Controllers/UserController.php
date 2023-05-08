<?php

namespace App\Http\Controllers;

use App\Reports\UserReport;
use App\Services\SimpleService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    public function __construct(
        private readonly SimpleService $simpleService,
        private readonly UserService $userService,
    )
    {}

    public function hello($id) {
        return $this->simpleService->sayHello();
    }

    public function report($id, Request $request) {
        /*$report = App::call([new UserReport, 'generate']);
        return $report;*/

        $called = App::make(UserReport::class);
        $func = [$called, 'generate'];
        $report = $func($this->userService, $request, $id);
        return $report;
    }
}
