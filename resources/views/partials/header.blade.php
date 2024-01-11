<header>
    <div class="container d-flex justify-content-between align-items-center p-3">
        <div>
            <img src="/img/dc-logo.png" alt="logo">
        </div>
        <nav>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-uppercase {{ Route::currentRouteName() == 'comics.index' ? 'active' : 'text-black' }}" href="{{ route('comics.index') }}">comics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase {{ Route::currentRouteName() == 'comics.create' ? 'active' : 'text-black' }}" href="{{ route('comics.create') }}">Add Comic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase {{ Route::currentRouteName() == 'home' ? 'active' : 'text-black' }}" href="{{ route('home') }}">Home</a>
                </li>
                @foreach (config('headerdb.headercontent') as $item)
                <li class="nav-item">
                    <a class="nav-link text-black text-uppercase" href="#">{{ $item }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
        <div class="input-group w-auto ">
            <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Search">
                <label for="floatingInputGroup1">Search</label>
            </div>
        </div>
    </div>
</header>
