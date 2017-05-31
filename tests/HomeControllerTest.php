<?php

class HomeControllerTest extends TestCase
{
    public function testIndex()
    {
        $this->visit('/')
            ->assertResponseOk()
            ->seeRouteIs('index')
            ->see('JoyMeet');
    }
}