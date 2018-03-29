<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class DeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::find(18);
        if (!is_null($user)) {
            $user->destroy(18);
            $this->assertTrue($user->save());
        }
        $this->assertTrue($user=!NULL);
    }
}
