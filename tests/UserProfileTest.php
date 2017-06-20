<?php

use App\Role;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserProfileTest extends TestCase
{
    use DatabaseMigrations;

    private $profile;
    private $user;

    public function setUp()
    {
        parent::setUp();
        $this->profile = factory(App\Profile::class)->create();
        $this->user = $this->profile->user;
        $this->user->attachRole(Role::where('name', '=', 'Admin')->first());
    }

    public function testUserProfile()
    {
        $this->seeInDatabase('users', [
            'id' => $this->user->id,
        ]);
        $this->assertEquals($this->user->profile->id, $this->profile->id);
    }

    public function testUserIndex()
    {
        $this->actingAs($this->user)->get('/user')->seeRouteIs('user.index');
    }

    public function testUserShow()
    {
        $this->actingAs($this->user)->get('/user/' . $this->user->id)->seeRouteIs('user.show', $this->user->id);
    }
}
