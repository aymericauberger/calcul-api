<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AddTest extends TestCase
{
    /** @test */
    public function it_adds_two_numbers()
    {
        $this->postJson('/api/add', [
            'number_1' => 2,
            'number_2' => 3,
        ])
            ->assertStatus(200)
            ->assertJson(['result' => 5]);
    }
}
