<header class="header-top">
        <a href="{{ route('pub.index') }}"><div class="logo">Devvit<span class="logo-io">.io</span></div></a>
        <div class="tagline">SOME. TAGLINE. HERE.</div>
        <ul class="authorization">
            @guest
                <a href="{{ route('login') }}"><li>Sign in</li></a>
                <a href="{{ route('register') }}"><li>Register</li></a>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </header>

    <nav class="main-nav">
        <ul class="main-nav-list">
            <li><a href="{{ route('pub.index') }}">Home</a></li>
            <li><a href="{{ route('pub.recent') }}">Recent</a></li>
            <li><a href="{{ route('pub.trending') }}">Trending</a></li>
            <li><a href="{{ route('pub.browse') }}">Browse</a></li>
            <li><a href="{{ route('pub.more') }}">More</a></li>
        </ul>
    </nav>
