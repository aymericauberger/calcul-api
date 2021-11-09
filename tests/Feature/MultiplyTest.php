<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MultiplyTest extends TestCase
{
    /** @test */
    public function it_multiplies_two_numbers()
    {
        $this->postJson('/api/multiply', [
            'number_1' => 2,
            'number_2' => 3,
        ])
            ->assertStatus(200)
            ->assertJson(['result' => 6]);
    }

    /** @test */
    public function it_multiplies_multiple_numbers()
    {
        $this->postJson('/api/multiply', [
            'numbers' => [2, 3, 5, 10],
        ])
            ->assertStatus(200)
            ->assertJson(['result' => 300]);
    }
}
