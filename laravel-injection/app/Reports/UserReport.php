<?php

namespace App\Reports;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserReport
{
    /**
     * Generate a new user report.
     */
    public function generate(UserService $userService, Request $request): array
    {
        return $userService->invoice($request);
    }
}
