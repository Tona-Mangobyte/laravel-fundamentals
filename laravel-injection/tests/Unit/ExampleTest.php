<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use App\Models\User;
use App\Services\SimpleService;
use App\Services\UserService;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $user = $this->app->make(User::class);
        // $simpleSrv = $this->app->make(SimpleService::class);
        $userSrv = $this->app->make(UserService::class);

        // $this->assertEquals($simpleSrv->say(), "Hi, Tona");
        $this->assertEquals($userSrv->findAll(), "Hi, Tona");
        $this->assertEquals($user->sayHello(), "Hello Admin");
        $this->assertTrue(true);
    }
}
