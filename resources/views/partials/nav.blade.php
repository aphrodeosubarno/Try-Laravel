<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Larablog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'All Article' ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Categories' ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle w-100" type="button" id="dropdownMenuButton2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>&nbsp;{{ auth()->user()->name }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                <li>
                                    <a class="dropdown-item" href="/dashboard">
                                        <i class="bi bi-house-door-fill"></i>&nbsp;Dashboard
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf

                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-left"></i>&nbsp;Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a href="/login" class="btn btn-success w-100">
                            <i class="bi bi-box-arrow-in-right"></i>&nbsp;Login
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
