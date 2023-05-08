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
    public function test_read_one(): void
    {
        $user = $this->userService->getOne(1);
        $this->assertNotNull($user);
        $this->assertEquals(1, $user->id);
        $this->assertNotNull($this->userService);
        $this->assertTrue(true);
    }

    public function test_read_all(): void {
        $users = $this->userService->getAll();
        $this->assertEquals(1001, $users->count());
        $this->assertTrue(true);
    }

    public function test_create(): void {
        $ages = [
            'name' => 'simple',
            'email' => 'simple@mb.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ];
        $user = $this->userService->createOrUpdate($ages);
        $this->assertEquals('simple', $user->name);
        $this->assertTrue(true);
    }

    public function test_delete(): void {
        $user = $this->userService->where('name', 'simple');
        $user->delete();
        $this->assertTrue(true);
    }
}
