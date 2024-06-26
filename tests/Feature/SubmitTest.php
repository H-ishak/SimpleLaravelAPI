<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmitTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->post('/api/submit',[
            'name' => 'test',
            'email' => 'test@test',
            'message' => 'test'
        ]);

        $response->assertJson([
            "message" => "Submission successful"
        ]);
    }
}
