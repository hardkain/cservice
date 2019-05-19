<?php

namespace App\Http\Controllers;

use App\Country;
use App\Repositories\CustomerRepositoryInterface;
use Illuminate\Support\Facades\Input;

class CustomerController extends Controller
{
    private $customer;

    /**
     * CustomerController constructor.
     *
     * @param CustomerRepositoryInterface $customer
     */
    public function __construct(CustomerRepositoryInterface $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country_code = Input::get('country_code');

        $customers = $this->customer->all($country_code)->get();

        return response()->json($customers);
    }

    /**
     * @param null $country_code - country code
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getList($country_code = null)
    {
        $menu = Country::pluck('name','country_code');

        $customers =
            $this->customer->all($country_code)
                ->orderBy('last_name', 'desc')
                ->with('country')
                ->get();

        return view('customers', compact('customers', 'menu', 'country_code'));
    }
}
