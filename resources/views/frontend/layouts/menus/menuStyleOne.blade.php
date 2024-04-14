    <!--==============================
         Header Area
        ==============================-->
    <header class="themeholy-header header-layout5">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-md-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="fa-regular fa-phone"></i><span class="link-title">{{trans('frontend.Customer Service')}} :
                                    </span><a href="tel:{{@App\Models\HeaderContact::first()->phone}}">{{@App\Models\HeaderContact::first()->phone}}</a></li>
                                <li><i class="fa-regular fa-envelope"></i><span class="link-title">{{trans('frontend.Email')}} : </span><a href="mailto:{{@App\Models\HeaderContact::first()->email}}">{{@App\Models\HeaderContact::first()->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-right">
                            <div class="langauge">
                                <img src="{{ asset('assets/frontend/assets/img/icon/fag.svg') }}" alt="">
                                <select class="form-select nice-select">
                                    <option selected="">Indonesia</option>
                                    <option>English</option>
                                </select>
                            </div>
                            <div class="header-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ url('/') }}"><img src="{{ url(GetSetting('site_logo')) }}" width="270px" alt="Pelindo"></a> 
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    @foreach (@App\Models\Menu::whereNull('parent_id')->orderBy('order', 'asc')->get() as $item)
                                        @if (@App\Models\Menu::where('parent_id', $item->id)->orderBy('order', 'asc')->count() > 0)
                                            <li class="menu-item-has-children">
                                                <a href="#">{{$item->title}}</a>
                                                <ul class="sub-menu">
                                                    @foreach (@App\Models\Menu::where('parent_id', $item->id)->orderBy('order', 'asc')->get() as $subitem)
                                                        <li><a href="{{ url($subitem->link) }}">{{ $subitem->title }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ asset('/' . $item->link) }}">{{$item->title}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </nav>
                            <button type="button" class="themeholy-menu-toggle d-inline-block d-lg-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <button type="button" class="icon-btn searchBoxToggler"><i
                                        class="fal fa-search"></i></button>
                                <button type="button" class="icon-btn fs-6 sideMenuToggler">
                                    <img src="{{ asset('assets/frontend/assets/img/icon/grid.svg') }}" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
        <div class="menu-shape">
            <div class="top-shape" data-bg-src="{{ asset('assets/frontend/assets/img/bg/header_bg_1.png') }}"></div>
        </div>
        <div class="logo-bg2"></div>
    </header>
