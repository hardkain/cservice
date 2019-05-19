<?php

namespace Tests\Unit;

use Tests\TestCase;

class CustomersTest extends TestCase
{
    /** @test */
    public function can_get_all_the_customers_json_format()
    {
        $response = $this->json('GET', '/api/customers');

        //make sure that status is ok
        $response->assertStatus(200);

        //make sure that the response has a given JSON structure
        $response->assertJsonStructure(
            [
                [
                    'id',
                    'country_id',
                    'first_name',
                    'last_name'
                ]
            ]
        );
    }
}
