<?php

namespace Tests\Feature;

use Tests\TestCase;

class TasksTest extends TestCase
{
    /** @test */
    public function test_check_health_api_works()
    {
        $response = $this->getJson('/api/v1/hc');
        
        $response->assertOk();
    }

    /** @test */
    public function test_search_by_code() {
        
        $response = $this->postJson('/api/v1/code',["code" => "BRL"]);
        
        $response->assertOk();
    }
}
