<?php

use App\Models\Role;
use Tests\TestCase;

class RoleTest extends TestCase
{
    public function test_role() {
        $role = Role::find(1);
        Log::info($role->users);
        $this->assertTrue(true);
    }
}
