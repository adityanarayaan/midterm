<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CheckCarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $cars = Car::inRandomOrder()->first();
        $value=$cars->make;
        $this->assertContains($value, ['honda','toyota','ford']);
    }
}
