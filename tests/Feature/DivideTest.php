<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class DivideTest extends TestCase
{
    /** @test */
    public function it_divides_two_numbers()
    {
        $this->postJson('/api/divide', [
            'number_1' => 10,
            'number_2' => 2,
        ])
            ->assertStatus(200)
            ->assertJson(['result' => 5]);
    }

    /** @test */
    public function it_cant_be_divided_by_zero()
    {
        $this->postJson('/api/divide', [
            'number_1' => 10,
            'number_2' => 0,
        ])
            ->assertStatus(422);
    }
}
