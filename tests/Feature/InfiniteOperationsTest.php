<?php

namespace Tests\Feature;

use Tests\TestCase;

class InfiniteOperationsTest extends TestCase
{
    /** @test */
    public function it_can_make_multiple_operations()
    {
        $this->postJson('/api/multiple-operations', [
            'operations' => [[[[36, '+', 32], '+', [5, '*', 2]], '-', 12], '/', [16, '-', [3, '+', 2]]]
        ])
            ->assertStatus(200)
            ->assertJson(['result' => 6]);
    }

    /** @test */
    public function it_cant_be_divided_by_zero()
    {
        $this->postJson('/api/multiple-operations', [
            'operations' => [[[[36, '+', 32], '+', [5, '*', 2]], '-', 12], '/', [16, '-', [14, '+', 2]]]
        ])
            ->assertStatus(400)
            ->assertJson(['result' => 'You tried to divide by zero.']);
    }
}
