<li class="nav-item">
    <a class="nav-link {{ $country_code == $code ? '' : ' active' }}" href="{{ route('customers', [$code]) }}">{{ $name }}</a>
</li>
