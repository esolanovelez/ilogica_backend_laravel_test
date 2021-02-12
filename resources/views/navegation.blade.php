<nav class="navbar navbar-expand-lg navbar-light navbar-floating">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('favicon.png') }}" alt="" width="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-lg-5 mt-3 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">{{ __('Contact') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard') }}">{{ __('Dashboard') }}</a>
            </li>
        </ul>
        </div>
    </div>
</nav>