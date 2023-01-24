<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
USE Tests\TestCase;

class GetHistoricalsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $content = $this->call('GET', '/historicals/1');
        $content->assertStatus(200);
    }
}
