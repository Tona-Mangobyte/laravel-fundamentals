<?php

use App\Models\User;
use App\Services\UserService;
use Tests\TestCase;

class UserTest extends TestCase
{
    protected UserService $userService;
    public function setUp(): void {
        parent::setUp();
        $this->userService = $this->app->make(UserService::class);
        // $this->userService = $this->app->make('App\Services\UserService');
    }
    public function test_read_user(): void
    {
        $user = $this->userService->getOne(1);
        $this->assertNotNull($user);
        $this->assertEquals(1, $user->id);
        $this->assertNotNull($this->userService);
        $this->assertTrue(true);
    }
}
