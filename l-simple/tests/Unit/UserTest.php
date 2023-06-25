<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_create_test() {
        $user = $this->app->make(User::class);
        $param = [
            'id' => 2,
            'name' => 'simple',
            'email' => 'simple@gmail.com',
            'password' => '12345',
        ];
        $this->assertTrue($user->fill($param)->save());
        $this->assertTrue($user->delete());
    }
}
