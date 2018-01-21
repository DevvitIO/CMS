<header class="header-top">
        <div class="logo">Devvit <a href="index.php"><span class="logo-io">.io</span></a></div>
        <div class="tagline">SOME. TAGLINE. HERE.</div>
        <ul class="authorization">
            <a href="{{ route('pub.signin') }}"><li>Sign in</li></a>
            <a href="{{ route('pub.signup') }}"><li>Register</li></a>
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
