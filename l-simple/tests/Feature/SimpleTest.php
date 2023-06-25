<?php

namespace Tests\Feature;

use Tests\TestCase;

class SimpleTest extends TestCase
{
    public function test_get_request() {
        $response = $this->get('/simple/23');
        $response->assertSee(23);
        $response->assertStatus(200);
    }

    public function test_api_get_request() {
        $response = $this->getJson('api/simple/23',['X-API-Version' => '17']);
        $response->assertJson([
            'status' => true,
            'message' => "response success",
            'data' => 23,
        ]);
        $response->assertStatus(200);
    }

    public function test_api_post_request() {
        $response = $this->postJson('api/simple', [
            'title' => 'Testing Laravel',
            'body'  => 'My article about testing Laravel',
        ],
            //['X-API-Version' => '17']
        );
        $response->assertJson([
            'status' => true,
            'message' => "response success",
            'data' => [
                'title' => 'Testing Laravel',
                'body'  => 'My article about testing Laravel',
            ],
        ]);
        $response->assertStatus(200);
    }
}
