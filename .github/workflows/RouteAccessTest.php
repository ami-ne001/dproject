<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteAccessTest extends TestCase
{
    public function test_homepage_is_accessible()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_dashboard_redirects_when_not_logged_in()
    {
        $response = $this->get('/dashboard');
        $response->assertRedirect('/login');
    }
}
