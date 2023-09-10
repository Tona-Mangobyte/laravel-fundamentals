<?php

use App\Models\Country;
use App\Models\User;
use Tests\TestCase;

class CountryTest extends TestCase
{
    public function test_country(): void {

        $country = Country::find(1);
        // Log::info($country->users);
        Log::info($country->posts);
        $user = User::find(1);
        // Log::info($user->country);
        $this->assertTrue(true);
    }
}
