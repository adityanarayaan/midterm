<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $cars=new Car();
        $cars->make='ford';
        $cars->model='p90';
        $cars->year='2014';
        //$cars->save();
        $this->assertTrue($cars=!NULL);
    }
}
