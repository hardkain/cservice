<?php

namespace App\Repositories;

use App\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
    /**
     * Get's all customers.
     *
     * @param $country_code - country code
     * @return mixed
     */
    public function all($country_code)
    {
        return Customer::getList($country_code);
    }
}
