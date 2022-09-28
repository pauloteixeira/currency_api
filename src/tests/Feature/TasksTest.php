<?php

namespace Tests\Feature;

use Tests\TestCase;

class TasksTest extends TestCase
{
    /** @test */
    public function test_search_by_code() {
        
        $response = $this->postJson('/api/v1/code',["code" => "BRL"]);
        
        $response->assertOk();
    }

    /** @test */
    public function test_search_by_code_list() {
        
        $response = $this->postJson('/api/v1/code/list',["code_list" => ["cad","brl","USD"]]);
        
        $response->assertOk();
    }

    /** @test */
    public function test_search_by_number() {
        
        $response = $this->postJson('/api/v1/number',["number" => "124"]);
        
        $response->assertOk();
    }

    /** @test */
    public function test_search_by_number_list() {
        
        $response = $this->postJson('/api/v1/number/list',["number_list" => [["986","124","840"]]]);
        
        $response->assertOk();
    }
}
