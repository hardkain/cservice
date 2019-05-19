<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    public function country()
    {
        return $this->hasOne('App\Country', 'id', 'country_id');
    }

    public static function getList($country_code = null)
    {
        $customers = Customer::whereHas('country', function($q) use($country_code)
        {
            if ($country_code) {
                $q->where('country_code', '=', $country_code);
            }
        });

        return $customers;
    }
}
