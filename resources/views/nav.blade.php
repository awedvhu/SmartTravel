<header class="header">
    <div class="header_center">
        <div class="main_logo">
            <img src="{{ asset('img/header_logo') }}" title="台北旅遊網" height="100px" width="250px">
        </div>
        <nav class="main_nav">
            <a href="#" id="main_news">
                <div class="main_news">

                    <h4>最新消息</h4>
                </div>
            </a>
            <a href="#" id="main_places">
                <div class="main_places">

                    <h4>特色景點</h4>
                </div>
            </a>
            <div>
                @guest
                @if (Route::has('login'))

                <a class="nav-link" href="{{ route('login') }}">{{ __('登入') }}</a>

                @endif
            </div>
            <div>
                @if (Route::has('register'))

                <a class="nav-link" href="{{ route('register') }}">{{ __('註冊') }}</a>

                @endif
            </div>

            <div>
                @else
                <div class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest
            </div>


        </nav>
    </div>
</header>