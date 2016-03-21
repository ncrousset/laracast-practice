<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {

        // 1. Visit the home page
        // 2. Press a "Click Me" link
        // 3. See "You`ve been clicked, punk."
        // 4. Asset that the current url is /feeback
         
        $this->visit('/')
             ->click("Click Me")
             ->see("You`ve been clicked, punk.")
             ->seePageIs("/feeback");



    }
}
