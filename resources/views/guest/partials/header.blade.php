<header>
    <div class="upper-header">
        <div class="container"></div>
    </div>

    <div class="header container">
        <a href="{{ route('home') }}">
            <img src="{{ asset('./images/dc-logo.png')}}" alt="logo DC">
        </a>
        <nav>
            <ul>
                <li><a class="{{ Route::current()->getName() == 'characters' ? 'active' : '' }}" href="{{ route('characters') }}">characters</a></li>
                <li><a class="{{ Route::current()->getName() == 'comics' ? 'active' : '' }}" href="{{ route('comics') }}">comics</a></li>
                <li><a class="{{ Route::current()->getName() == 'movies' ? 'active' : '' }}" href="#">movies</a></li>
                <li><a class="{{ Route::current()->getName() == 'tv' ? 'active' : '' }}" href="#">tv</a></li>
                <li><a class="{{ Route::current()->getName() == 'games' ? 'active' : '' }}" href="#">games</a></li>
                <li><a class="{{ Route::current()->getName() == 'collectibles' ? 'active' : '' }}" href="#">collectibles</a></li>
                <li><a class="{{ Route::current()->getName() == 'videos' ? 'active' : '' }}" href="#">videos</a></li>
                <li><a class="{{ Route::current()->getName() == 'fans' ? 'active' : '' }}" href="#">fans</a></li>
                <li><a class="{{ Route::current()->getName() == 'news' ? 'active' : '' }}" href="#">news</a></li>
                <li><a class="{{ Route::current()->getName() == 'shop' ? 'active' : '' }}" href="#">shop</a></li>
            </ul>
        </nav>
    </div>
</header>
<section id="jumbotron">
    <img src="{{ asset('./images/jumbotron.jpg')}}" alt="DC Comics banner personaggi">
</section>
