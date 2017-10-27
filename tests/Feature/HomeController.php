<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeController extends TestCase
{
      public function testHomePage()
    {
        $response = $this->call('GET', '/'); 
        $this->assertResponseOk();
    }
    
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
