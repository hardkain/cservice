<?php

use Illuminate\Database\Seeder;

class TransactionCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('countries')->insert([
            'id' => 1,
            'name' => 'Finland',
            'country_code' => 'fi'
        ]);
        \DB::table('countries')->insert([
            'id' => 2,
            'name' => 'Latvia',
            'country_code' => 'lv'
        ]);
        \DB::table('countries')->insert([
            'id' => 3,
            'name' => 'Sweden',
            'country_code' => 'se'
        ]);
    }
}
