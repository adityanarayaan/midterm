<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class StringTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $cars = Car::inRandomOrder()->first();
        $this->assertInternalType('string',$cars->model);
        $this->assertInstanceof('App\Car',$cars);
    }
}
