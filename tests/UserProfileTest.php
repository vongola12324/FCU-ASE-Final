<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserProfileTest extends TestCase
{
    use DatabaseMigrations;

    private $profile;

    public function setUp()
    {
        parent::setUp();
        $this->profile = factory(App\Profile::class)->create();
    }

    public function testUserProfile()
    {
        $this->seeInDatabase('users', [
            'id' => $this->profile->user->id,
        ]);
        $this->assertEquals($this->profile->user->profile->id, $this->profile->id);
    }

    public function testUserIndex()
    {
        $this->get('/user')->seeRouteIs('user.index');
    }
}
