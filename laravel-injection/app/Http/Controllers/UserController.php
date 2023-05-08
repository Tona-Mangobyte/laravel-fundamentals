<?php

namespace App\Http\Controllers;

use App\Reports\UserReport;
use App\Services\SimpleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    public function __construct(private readonly SimpleService $simpleService)
    {}

    public function hello($id) {
        return $this->simpleService->sayHello();
    }

    public function report() {
        $report = App::call([new UserReport, 'generate']);
        return $report;
    }
}
