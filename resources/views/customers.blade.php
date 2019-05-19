@extends('layout')
@section('menu')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ $country_code ? 'active' : '' }}" href="{{ route('customers') }}">All</a>
            </li>
            @foreach ($menu as $code => $name)
                @include('menuitem', compact('country_code', 'name', 'code'))
            @endforeach
        </ul>
    </nav>
@endsection

@section('content')
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Last name</th>
            <th>First name</th>
            <th>Country</th>
        </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->last_name }}</td>
                    <td>{{ $customer->first_name }}</td>
                    <td>{{ $customer->country->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


