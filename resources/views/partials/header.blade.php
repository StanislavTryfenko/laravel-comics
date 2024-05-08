<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-primary">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @php
                        $links = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
                        @endphp
                        @foreach ($links as $link)
                        <li class="nav-item">
                            <a class="nav-link" href="/">{{ strtoupper($link) }}</a>
                        </li>
                        @endforeach
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SHOP
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">che</a></li>
                                <li><a class="dropdown-item" href="#">ci</a></li>
                                <li><a class="dropdown-item" href="#">metto?</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>