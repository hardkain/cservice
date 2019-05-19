<?php

namespace App\Repositories;

interface CustomerRepositoryInterface
{
    /**
     * Get's all customers.
     *
     * @param $country_code - country code
     * @return mixed
     */
    public function all($country_code);
}
