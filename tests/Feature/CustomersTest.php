<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CustomersTest extends TestCase
{
    //use DatabaseMigrations;

    /** @test */
    public function can_see_all_the_customers()
    {
        //make sure that we have customers route
        $response = $this->get(route('customers'));

        //make sure that the response is ok
        $response->assertSuccessful();

        //make sure that we are getting the right view
        $response->assertViewIs('customers');

        //make sure that the view contains the variables needed for this page
        $response->assertViewHas('customers');
        $response->assertViewHas('menu');
        $response->assertViewHas('country_code');
    }
}
