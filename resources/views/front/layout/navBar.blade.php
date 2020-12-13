<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="{{public_path('assests/front/images/logo2.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse menu-center" id="ftco-nav">
            <ul class="navbar-nav ml-auto" id="navbar-nav">
            <li class="nav-item  index active "><a href="#index" class="nav-link">@lang('navbar.home')</a></li>
                <li class="nav-item about"><a href="#about" class="nav-link">@lang('navbar.about us')</a></li>
                <li class="nav-item our-work"><a href="#our-work" class="nav-link">@lang('navbar.services')</a></li>
{{--                <li class="nav-item projects"><a href="#projects" class="nav-link">@lang('navbar.projects')</a></li>--}}
{{--                <li class="nav-item testmonails"><a href="#testmonails" class="nav-link">@lang('navbar.testimonial')</a></li>--}}
                <li class="nav-item supports"><a href="#supports" class="nav-link">@lang('navbar.partners')</a></li>
                <li class="nav-item contact"><a href="#contact" class="nav-link">@lang('navbar.Conact')</a></li>

{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
{{--                       @lang('navbar.language')--}}
{{--                        </a>--}}
{{--                    <div class="dropdown-menu">--}}
{{--                      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                          <a  class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                              {{ $properties['native'] }}--}}
{{--                          </a>--}}
{{--                  @endforeach--}}
{{--                    </div>--}}
{{--                  </li>--}}

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
