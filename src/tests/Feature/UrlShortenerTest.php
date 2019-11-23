<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UrlShortenerTest extends TestCase
{

    /** @test */
    public function a_user_can_visit_url_shortener_route()
    {
        $this->withoutExceptionHandling();
        $this->get(route('url-shortener'))
            ->assertOk()
            ->assertSee('Url Shortener');
    }
}
