<?php

namespace App\Reports;

use App\Services\UserService;

class UserReport
{
    /**
     * Generate a new user report.
     */
    public function generate(UserService $userService): array
    {
        return $userService->invoice();
    }
}
