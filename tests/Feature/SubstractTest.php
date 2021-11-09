<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class SubstractTest extends TestCase
{
    /** @test */
    public function it_substracts_two_numbers()
    {
        $this->postJson('/api/substract', [
            'number_1' => 2,
            'number_2' => 10,
        ])
            ->assertStatus(200)
            ->assertJson(['result' => -8]);
    }
}
